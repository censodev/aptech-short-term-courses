function googleCallback() {
    gapi.client.setApiKey(document.getElementById('comment-module').dataset['ggApikey']);
    gapi.client.load('plus', 'v1', function () {});
}

var CommentModule = {
    data: {
        user: { name: null, phone: null, email: null, avatar: null }
    },

    formatDate: function (time) {
        if (typeof time == "string") time = parseInt(time);
        var date = new Date(time),
            monthNames = [];

        if (!date) return "Gần đây";

        for (var i = 1; i < 13; i++) {
            monthNames.push("Tháng " + i);
        }

        var day = date.getDate(),
            month = monthNames[date.getMonth()],
            year = date.getFullYear(),
            hour = date.getHours() < 10 ? ("0" + date.getHours()) : date.getHours(),
            minute = date.getMinutes() < 10 ? ("0" + date.getMinutes()) : date.getMinutes();

        return [day, month, year].join('/') + " " + [hour, minute].join(':');
    },

    renderComments: function (data) {
        var self = this;
        if (!data.length) {
            self.initSubmitForm();
            return $('#comment-module .no-comments').show(), 0;
        }
        $('.comment-list').empty();

        data.forEach(function (item) {
            var media = $('<div class="media" />'),
                avatar = $('<img class="d-flex mr-3" src="img/avatar.jpg" />'),
                title = $('<p class="comment-title">').html($('<strong/>').html(item.name)),
                comment = $('<p class="comment-text"/>').html(item.comment),
                actionBox = $('<div class="comment-action" />'),
                time = self.formatDate(item.time);

            var replyLink = $('<a href="javascript:(0)">Phản hồi</a>');
            replyLink.on('click', function () {
                $('#comment-' + item.id + " .sub-form").addClass('show');
            });

            if (item.avatar && item.avatar != "") avatar.attr('src', item.avatar);

            var mediaBody = $('<div class="media-body"/>');

            if (item.pid) {
                media.html(avatar).append(mediaBody.html(title).append(comment).append(actionBox.append(time)));
                var parent = $('#comment-' + item.pid);
                if (parent.length) {
                    var subcomment = parent.find('.comment-replies');
                    if (!subcomment.length) {
                        subcomment = $('<ul class="list-unstyled comment-replies" />');
                        subcomment.append($('<li id="comment-' + item.id + '" />').html(media));
                        parent.append(subcomment);
                    } else {
                        subcomment.append($('<li id="comment-' + item.id + '" />').html(media));
                    }
                }
            } else {
                media.html(avatar).append(mediaBody.html(title).append(comment).append(actionBox.html(replyLink).append(time)));
                $('.comment-list').append($('<li id="comment-' + item.id + '" />').html(media));
            }
        });

        $('.comment-list > li').each(function () {
            var form = $('<form class="form-reply sub-form" />'),
                cId = $(this).attr('id').split('-')[1];

            form.append('<textarea name="text" placeholder="Thêm trả lời bình luận" maxlength="500" rows="1"></textarea>');
            form.append('<input type="hidden" name="pid" value="' + cId + '" />');
            form.append('<button type="submit" name="submitForm">Gửi</button>');
            form.append('<span class="counter">Bạn còn <strong>500</strong> ký tự còn lại</span>')

            $(this).append(form)
        });

        self.initSubmitForm();
    },

    loadComments: function (url) {
        var self = this;
        $.ajax({
            type: "GET",
            url: window["commentURL"] + "/get.php",
            dataType: "json",
            success: function (response) {
                self.renderComments(response)
            }
        });
    },

    sendComment: function (url, data) {
        var self = this;
        $.ajax({
            type: "POST",
            url: window["commentURL"] + "/send.php",
            data: data || {},
            dataType: "json",
            complete: function (response) {
                if (response.responseText)
                    self.loadComments()
            }
        });
    },

    facebook: {
        data: {
            appId: document.getElementById('comment-module').dataset['fbAppid'] || null
        },
        init: function () {
            var self = this;
            console.log(self.data.appId)
            FB.init({
                appId: self.data.appId,
                xfbml: true,
                status: true,
                cookie: true,
                oauth: true
            });
        },
        status: function (callback) {
            var res = { isLogin: false, uid: '', accessToken: '' };
            FB.getLoginStatus(function (response) {
                if (response.status === 'connected') {
                    res.uid = response.authResponse.userID;
                    res.accessToken = response.authResponse.accessToken;
                    res.isLogin = true;
                }
                if (callback && typeof callback == 'function') {
                    callback(res);
                }
            });
        },
        login: function (callback) {
            var res = { status: 'fail' };
            FB.login(function (response) {
                if (response.status === 'connected') {
                    res.status = 'complete';
                }
                if (callback && typeof callback == 'function') {
                    callback(res)
                }
            }, { scope: 'email,public_profile' });
        },
        getUser: function (callback) {
            var infoDefer = $.Deferred(),
                pictureDefer = $.Deferred(),
                data = {};
            FB.api('/me?fields=id,name,email', function (response) {
                infoDefer.resolve(response);
            });

            FB.api("/me/picture?width=180&height=180", function (response) {
                if (response.data && response.data.url)
                    pictureDefer.resolve(response.data.url);
                else 
                    pictureDefer.resolve('');
            });

            $.when(infoDefer, pictureDefer).done(function (info, picture) {
                if (callback && typeof callback == "function") {
                    callback({
                        name: info.name,
                        email: info.email,
                        avatar: picture
                    })
                }
            });
        }
    },

    google: {
        login: function (callback) {
            var myParams = {
                'clientid': document.getElementById('comment-module').dataset['ggClientid'] + '.apps.googleusercontent.com',
                'cookiepolicy': 'single_host_origin',
                'callback': callback,
                'approvalprompt': 'force',
                'scope': 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read'
            };
            gapi.auth.signIn(myParams);
        },
        getUser: function (result, callback) {
            var self = this;
            if (result['status']['signed_in']) {
                var data = {};
                gapi.client.load('plus', 'v1', function () {
                    var request = gapi.client.plus.people.get({
                        'userId': 'me'
                    });
                    request.execute(function (resp) {
                        var email = '';
                        if (resp['emails']) {
                            for (i = 0; i < resp['emails'].length; i++) {
                                if (resp['emails'][i]['type'] == 'account') {
                                    email = resp['emails'][i]['value'];
                                }
                            }
                        }

                        data.name = resp['displayName'];
                        data.avatar = resp['image']['url'];
                        data.email = email;

                        data.avatar = data.avatar.replace(/sz=50/ig, 'sz=100')

                        if (callback && typeof callback == "function") {
                            callback(data)
                        }
                    });
                });
            }
        }
    },

    initSubmitForm: function () {
        var self = this;
        $('#comment-module form.form-reply').each(function () {
            var form = $(this);
            form.find('textarea').keyup(function () {
                var len = $(this).val().length;
                if (len >= 500) {
                    val.value = val.value.substring(0, 500);
                } else {
                    form.find('.counter > strong').text(500 - len);
                }
            })
            form.unbind('submit');
            form.bind('submit', function () {
                var comment = form.find('textarea').val(),
                    pid = null;
                if (form.find('[name="pid"]').length) {
                    pid = form.find('[name="pid"]').val();
                }

                if (comment.length < 30) return alert('Bình luận phải trên 30 ký tự!'), false;

                if (!self.data.user.name) {
                    try {
                        $('#infoModal').modal('show');
                        $('#infoForm').submit(function () {
                            var formData = {
                                name: $('#infoModal [name="name"]').val(),
                                email: $('#infoModal [name="email"]').val(),
                                phone: $('#infoModal [name="phone"]').val(),
                                avatar: $('#infoModal [name="avatar"]').val()
                            };
                            for (var key in data) {
                                formData[data[key].split("=")[0]] = data[key].split("=")[1];
                            }

                            formData.comment = comment;
                            if (pid) formData.pid = pid;

                            self.sendComment(null, formData);
                            $('#infoModal').modal('hide');
                            form.find('textarea').val('');
                            return false;
                        });

                        $('#btnOpenFB').unbind('click');
                        $('#btnOpenFB').bind('click', function () {
                            var button = $(this);
                            button.attr('disabled', true)
                            self.facebook.status(function (data) {
                                if (data.isLogin) {
                                    self.facebook.getUser(function (user) {
                                        button.attr('disabled', false);
                                        setField(user)
                                    })
                                } else {
                                    self.facebook.login(function (res) {
                                        if (res.status == "success") {
                                            self.facebook.getUser(function (user) {
                                                button.attr('disabled', false);
                                                setField(user)
                                            })
                                        } else {
                                            alert('Không kết nối được tài khoản Facebook của bạn!');
                                            button.attr('disabled', false);
                                        }
                                    })
                                }
                            });
                        });

                        $('#btnOpenGG').unbind('click');
                        $('#btnOpenGG').bind('click', function () {
                            self.google.login(function (result) {
                                self.google.getUser(result, function (data) {
                                    setField(data)
                                })
                            });
                        });
                    } catch (e) {
                        console.error(e)
                        return false;
                    }

                    function setField(data) {
                        self.data.user = data;
                        $('#infoModal [name="name"]').val(data.name);
                        $('#infoModal [name="email"]').val(data.email);
                        $('#infoModal [name="phone"]').val(data.phone);
                        $('#infoModal [name="avatar"]').val(data.avatar);

                        $('#infoForm [type="submit"]').trigger('click');
                    }
                } else {
                    var data = self.data.user;
                    data.comment = comment;
                    if (pid) data.pid = pid;
                    self.sendComment(null, data);
                }

                return false;
            });
        });
    },

    init: function () {
        var self = this;

        if (!window.$) return false;
        self.facebook.init();
        self.loadComments();
    }
};