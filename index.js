window.onload = function () {

    const firebaseConfig = {
        apiKey: "AIzaSyBeMrLlyo4_-65JSgL2vBN3D4m6kPGtQAE",
        authDomain: "mychat-dbebb.firebaseapp.com",
        projectId: "mychat-dbebb",
        storageBucket: "mychat-dbebb.appspot.com",
        messagingSenderId: "630913953233",
        appId: "1:630913953233:web:a738378933aa7c49bdc4f0",
        measurementId: "G-0P533P6SHG"
    };

    firebase.initializeApp(firebaseConfig);
    var db = firebase.database()
    class MEME_CHAT {
        home() {
            document.body.innerHTML = ''
            this.create_home_title();
            this.create_footer();
            this.create_join_form();
        }
        chat() {
            this.create_title()
            this.create_chat()
        }

        create_title() {
            var title_container = document.createElement('div')
            title_container.setAttribute('id', 'title_container')
            var title_inner_container = document.createElement('div')
            title_inner_container.setAttribute('id', 'title_inner_container')

            title_container.style.height = "50px";
            var title = document.createElement('h1')
            title.setAttribute('id', 'title')
            title.textContent = 'Будь ласка, дотримуйтеся взаємоповаги, конструктивності, конфіденційності та тематики обговорення для підтримання позитивної атмосфери у нашому чаті.'
            title.style.fontFamily = 'Arial, sans-serif';
            title.style.fontSize = "12px";
            title.style.marginTop = "10px";

            title_inner_container.append(title)
            title_container.append(title_inner_container)
            document.body.append(title_container)
        }

        create_footer() {
            const footer = document.createElement('footer');

            const ul = document.createElement('ul');
            ul.classList.add('nav', 'mt-3');

            const li1 = document.createElement('li');
            li1.classList.add('nav-item');
            const a1 = document.createElement('a');
            a1.classList.add('nav-link', 'px-2', 'text-info');
            a1.href = "help.html";
            a1.textContent = "Допомога";
            li1.appendChild(a1);

            const li2 = document.createElement('li');
            li2.classList.add('nav-item');
            const a2 = document.createElement('a');
            a2.classList.add('nav-link', 'px-2', 'text-info');
            a2.href = "aboutus.html";
            a2.textContent = "Про нас";
            li2.appendChild(a2);

            ul.appendChild(li1);
            ul.appendChild(li2);

            li1.style.marginTop = "402px";
            li2.style.marginTop = "402px";
            li2.style.marginLeft = "96.5px";

            li1.style.position = "absolute";
            li2.style.position = "absolute";
            const container = document.createElement('div');
            container.classList.add('container', 'mb-1');

            container.style.marginTop = '443px';
            container.style.position = 'absolute';
            container.style.marginLeft = '150px';

            const footerContent = document.createElement('footer');
            footerContent.classList.add('d-flex', 'flex-wrap', 'justify-content-between', 'align-items-center', 'py-3', 'my-4', 'border-top');

            const leftContent = document.createElement('div');
            leftContent.classList.add('col-md-4', 'd-flex', 'align-items-center');

            const logoLink = document.createElement('a');
            logoLink.href = "/";
            logoLink.classList.add('mb-3', 'me-2', 'mb-md-0', 'text-muted', 'text-decoration-none', 'lh-1');

            const logoSVG = document.createElement('svg');
            logoSVG.classList.add('bi');
            logoSVG.setAttribute('width', '30');
            logoSVG.setAttribute('height', '24');
            const useTag = document.createElement('use');
            useTag.setAttribute('xlink:href', '#bootstrap');
            logoSVG.appendChild(useTag);

            logoLink.appendChild(logoSVG);

            const span = document.createElement('span');
            span.classList.add('text-muted');
            span.style.fontFamily = 'Arial, sans-serif';
            span.style.fontWeight = 'normal';
            span.style.paddingLeft = "30px";
            span.style.paddingTop = "8px";
            span.textContent = '© 2024 StudyPals, Inc. All rights reserved.';

            const ulSocial = document.createElement('ul');
            ulSocial.classList.add('nav', 'col-md-4', 'justify-content-end', 'list-unstyled', 'd-flex');

            const liTwitter = document.createElement('li');
            liTwitter.style.marginRight = "-16px";
            liTwitter.classList.add('nav-item');
            const aTwitter = document.createElement('a');
            aTwitter.classList.add('nav-link', 'px-2', 'text-info');
            aTwitter.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                      <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                      </svg>`;
            liTwitter.appendChild(aTwitter);
            ulSocial.appendChild(liTwitter);

            const liInstagram = document.createElement('li');
            liInstagram.style.marginRight = "-16px";
            liInstagram.classList.add('nav-item');
            const aInstagram = document.createElement('a');
            aInstagram.classList.add('nav-link', 'px-2', 'text-info');
            aInstagram.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="70" height="24" fill="currentColor" class="bi bi-instagram" viewBox="1 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
            </svg>`;
            liInstagram.appendChild(aInstagram);
            ulSocial.appendChild(liInstagram);

            const liFacebook = document.createElement('li');
            liFacebook.classList.add('nav-item');
            const aFacebook = document.createElement('a');
            aFacebook.classList.add('nav-link', 'px-2', 'text-info');
            aFacebook.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
            </svg>`;          
            liFacebook.appendChild(aFacebook);
            ulSocial.appendChild(liFacebook);


            ulSocial.style.position = "absolute";
            ulSocial.style.marginLeft = "803px";
            ulSocial.style.marginTop = "484px";
            footer.appendChild(ulSocial);


            leftContent.appendChild(logoLink);
            leftContent.appendChild(span);

            const rightContent = document.createElement('ul');
            rightContent.classList.add('nav', 'col-md-4', 'justify-content-end', 'list-unstyled', 'd-flex');

            footerContent.appendChild(leftContent);
            footerContent.appendChild(rightContent);
            container.appendChild(footerContent);
            footer.appendChild(ul);
            footer.appendChild(container);


            document.body.appendChild(footer);
        }

        create_home_title() {
            var header = document.createElement('header');
            header.classList.add('p-3', 'text-white');

            var container = document.createElement('div');
            container.classList.add('container');

            var dFlex = document.createElement('div');
            dFlex.classList.add('d-flex', 'flex-wrap', 'align-items-center', 'justify-content-center', 'justify-content-lg-start');

            var logoLink = document.createElement('a');
            logoLink.href = 'website.html';
            logoLink.classList.add('d-flex', 'align-items-center', 'mb-2', 'mb-lg-0', 'text-white', 'text-decoration-none');

            var logoImage = document.createElement('img');
            logoImage.src = 'logo.png';
            logoImage.alt = 'mdo';
            logoImage.width = 180;
            logoImage.height = 140;

            logoLink.appendChild(logoImage);

            var nav = document.createElement('ul');
            nav.classList.add('nav', 'col-12', 'col-lg-auto', 'me-lg-auto', 'mb-2', 'justify-content-center', 'mb-md-0');

            var navItems = [
                { href: 'website.html', text: 'Головна', class: 'text-info' },
                {
                    href: '#', text: 'Матеріали', class: 'text-info', dropdown: [
                        { href: '#', text: 'Українська мова' },
                        { href: '#', text: 'Математика' },
                        { href: '#', text: 'Історія України' },
                        { href: '#', text: 'Українська література' },
                        { href: '#', text: 'Іноземні мови' },
                        { href: '#', text: 'Біологія' },
                        { href: '#', text: 'Географія' },
                        { href: '#', text: 'Хімія' },
                        { href: '#', text: 'Фізика' },
                    ]
                },
                {
                    href: '#', text: 'Медіа', class: 'text-info', dropdown: [
                        { href: 'video.html', text: 'Відеоуроки' },
                        { href: '#', text: 'Аудіоуроки' },
                    ]
                },

                { href: '#', text: 'Форум', class: 'text-info', dropdown: [
                    { href: '#', text: 'Звичайний форум' },
                    { href: 'index.php', text: 'Анонімний форум' },
                ]},
                { href: 'index.html', text: 'Чат', class: 'text-info' },
                { href: '#', text: 'Додаткові уроки', class: 'text-info' },
                { href: 'store.html', text: 'Магазин', class: 'text-info' },
            ];

            navItems.forEach(item => {
                var li = document.createElement('li');
                li.classList.add('nav-item');

                if (item.dropdown) {
                    var a = document.createElement('a');
                    a.classList.add('nav-link', 'dropdown-toggle', 'px-2', item.class);
                    a.href = item.href;
                    a.id = 'materialsDropdown';
                    a.role = 'button';
                    a.setAttribute('data-toggle', 'dropdown');
                    a.setAttribute('aria-haspopup', 'true');
                    a.setAttribute('aria-expanded', 'false');
                    a.textContent = item.text;

                    var div = document.createElement('div');
                    div.classList.add('dropdown-menu');
                    div.setAttribute('aria-labelledby', 'materialsDropdown');

                    item.dropdown.forEach(subitem => {
                        var subA = document.createElement('a');
                        subA.classList.add('dropdown-item');
                        subA.href = subitem.href;
                        subA.textContent = subitem.text;
                        div.appendChild(subA);
                    });

                    li.appendChild(a);
                    li.appendChild(div);
                } else {
                    var a = document.createElement('a');
                    a.classList.add('nav-link', 'px-2', item.class);
                    a.href = item.href;
                    a.textContent = item.text;
                    li.appendChild(a);
                }

                nav.appendChild(li);
            });

            var textEnd = document.createElement('div');
            textEnd.classList.add('text-end');

            dFlex.appendChild(logoLink);
            dFlex.appendChild(nav);
            dFlex.appendChild(textEnd);
            container.appendChild(dFlex);
            header.appendChild(container);

            document.body.appendChild(header);
        }

        create_join_form() {
            var parent = this;

            var join_container = document.createElement('div')
            join_container.setAttribute('id', 'join_container')
            var join_inner_container = document.createElement('div')
            join_inner_container.setAttribute('id', 'join_inner_container')

            var chat_hint = document.createElement('h6');
            chat_hint.style.fontFamily = 'Arial, sans-serif';

            chat_hint.textContent = "Приєднуйся до чату";
            chat_hint.style.color = "white";
            chat_hint.style.marginTop = "-230px";
            chat_hint.style.marginLeft = "-280px";
            chat_hint.style.position = "absolute";
            join_container.appendChild(chat_hint);

            var number_online = document.createElement('h6');
            number_online.textContent = "Кількість користувачів в мережі ";
            number_online.style.color = "white";
            number_online.style.marginTop = "30px";
            number_online.style.fontFamily = 'Arial, sans-serif';

            number_online.style.marginLeft = "-180px";
            number_online.style.position = "absolute";
            join_container.appendChild(number_online);
            this.update_user_count(number_online);


            join_inner_container.style.marginTop = "200px";

            join_container.style.marginTop = '-16px';
            join_container.style.marginLeft = "0px";
            join_container.style.backgroundColor = "rgba(20,162,184,255)";
            join_container.style.width = "100vw";
            join_container.style.height = "402px";

            var join_button_container = document.createElement('div')
            join_button_container.setAttribute('id', 'join_button_container')

            var join_button = document.createElement('button')
            join_button.setAttribute('id', 'join_button')
            join_button.innerHTML = 'Приєднатися <i class="fas fa-sign-in-alt"></i>'

            var join_input_container = document.createElement('div')
            join_input_container.setAttribute('id', 'join_input_container')

            var join_input = document.createElement('input')
            join_input.setAttribute('id', 'join_input')
            join_input.setAttribute('maxlength', 15)
            join_input.placeholder = 'Введіть ваш нікнейм'

            join_input.onkeyup = function () {
                if (join_input.value.length > 0) {
                    join_button.classList.add('enabled')
                    join_button.onclick = function () {
                        parent.save_name(join_input.value)
                        location.reload();
                    }
                } else {
                    join_button.classList.remove('enabled')
                }
            }

            join_button_container.append(join_button)
            join_input_container.append(join_input)
            join_inner_container.append(join_input_container, join_button_container)
            join_container.append(join_inner_container)
            document.body.append(join_container)
        }


        create_load(container_id) {
            var parent = this;

            var container = document.getElementById(container_id)
            container.innerHTML = ''

            var loader_container = document.createElement('div')
            loader_container.setAttribute('class', 'loader_container')

            var loader = document.createElement('div')
            loader.setAttribute('class', 'loader')

            loader_container.append(loader)
            container.append(loader_container)

        }

        create_chat() {
            var parent = this;
            var title_container = document.getElementById('title_container')
            var title = document.getElementById('title')
            title_container.classList.add('chat_title_container')
            title.classList.add('chat_title')

            var chat_container = document.createElement('div')
            chat_container.setAttribute('id', 'chat_container')

            var chat_inner_container = document.createElement('div')
            chat_inner_container.setAttribute('id', 'chat_inner_container')

            var chat_content_container = document.createElement('div')
            chat_content_container.setAttribute('id', 'chat_content_container')

            var chat_input_container = document.createElement('div')
            chat_input_container.setAttribute('id', 'chat_input_container')

            var chat_input_send = document.createElement('button')
            chat_input_send.setAttribute('id', 'chat_input_send')
            chat_input_send.setAttribute('disabled', true)
            chat_input_send.textContent = "Надіслати"

            var chat_input = document.createElement('input')
            chat_input.setAttribute('id', 'chat_input')
            chat_input.setAttribute('maxlength', 1000)
            chat_input.placeholder = `${parent.get_name()}. Скажіть щось...`
            chat_input.onkeyup = function () {
                if (chat_input.value.length > 0) {
                    chat_input_send.removeAttribute('disabled')
                    chat_input_send.classList.add('enabled')
                    chat_input_send.onclick = function () {
                        chat_input_send.setAttribute('disabled', true)
                        chat_input_send.classList.remove('enabled')
                        if (chat_input.value.length <= 0) {
                            return
                        }
                        parent.create_load('chat_content_container')
                        parent.send_message(chat_input.value)
                        chat_input.value = ''
                        chat_input.focus()
                    }
                } else {
                    chat_input_send.classList.remove('enabled')
                }
            }

            var chat_logout_container = document.createElement('div')
            chat_logout_container.setAttribute('id', 'chat_logout_container')

            var chat_logout = document.createElement('button')
            chat_logout.setAttribute('id', 'chat_logout')
            chat_logout.textContent = `${parent.get_name()} • Вийти з чату`
            chat_logout.onclick = function () {
                parent.remove_user(parent.get_name());
                localStorage.clear();
                parent.home();
            }

            chat_logout_container.append(chat_logout)
            chat_input_container.append(chat_input, chat_input_send)
            chat_inner_container.append(chat_content_container, chat_input_container, chat_logout_container)
            chat_container.append(chat_inner_container)
            document.body.append(chat_container)
            parent.create_load('chat_content_container')
            parent.refresh_chat()
        }
        save_name(name) {
            localStorage.setItem('name', name);

            // Add the user to the list of users if not already present
            db.ref('users/').once('value', function (users_object) {
                if (!users_object.hasChild(name)) {
                    db.ref('users/' + name).set(true);
                }
            });
        }


        send_message(message) {
            var parent = this;
            if (parent.get_name() == null && message == null) {
                return;
            }

            db.ref('chats/').once('value', function (message_object) {
                var index = parseFloat(message_object.numChildren()) + 1;
                var timestamp = new Date().toLocaleTimeString();

                db.ref('chats/' + `message_${index}`).set({
                    name: parent.get_name(),
                    message: message,
                    timestamp: timestamp,
                    index: index
                })
                    .then(function () {
                        parent.refresh_chat();
                    });
            });
        }

        get_name() {
            if (localStorage.getItem('name') != null) {
                return localStorage.getItem('name')
            } else {
                this.home()
                return null
            }
        }

        get_user_count() {
            db.ref('users/').once('value', function (users_object) {
                var user_count = users_object.numChildren();
                console.log('Number of users:', user_count);
            });
        }

        refresh_chat() {
            var chat_content_container = document.getElementById('chat_content_container');

            db.ref('chats/').on('value', function (messages_object) {
                chat_content_container.innerHTML = '';
                if (messages_object.numChildren() == 0) {
                    return;
                }

                var messages = Object.values(messages_object.val());
                var guide = [];
                var unordered = [];
                var ordered = [];

                for (var i = 0; i < messages.length; i++) {
                    guide.push(i + 1);
                    unordered.push([messages[i], messages[i].index]);
                }

                guide.forEach(function (key) {
                    var found = false;
                    unordered = unordered.filter(function (item) {
                        if (!found && item[1] == key) {
                            ordered.push(item[0]);
                            found = true;
                            return false;
                        } else {
                            return true;
                        }
                    });
                });

                ordered.forEach(function (data) {
                    var name = data.name;
                    var message = data.message;
                    var timestamp = data.timestamp;

                    var message_container = document.createElement('div');
                    message_container.setAttribute('class', 'message_container');

                    var message_inner_container = document.createElement('div');
                    message_inner_container.setAttribute('class', 'message_inner_container');

                    var message_user_container = document.createElement('div');
                    message_user_container.setAttribute('class', 'message_user_container');

                    var message_user = document.createElement('p');
                    message_user.setAttribute('class', 'message_user');
                    message_user.textContent = `${name}`;

                    var message_time = document.createElement('span');
                    message_time.setAttribute('class', 'message_time');
                    message_time.textContent = `${timestamp}`;

                    var message_content_container = document.createElement('div');
                    message_content_container.setAttribute('class', 'message_content_container');

                    var message_content = document.createElement('p');
                    message_content.setAttribute('class', 'message_content');
                    message_content.textContent = `${message}`;

                    message_user_container.append(message_user, message_time);
                    message_content_container.append(message_content);
                    message_inner_container.append(message_user_container, message_content_container);
                    message_container.append(message_inner_container);

                    chat_content_container.append(message_container);
                });
                chat_content_container.scrollTop = chat_content_container.scrollHeight;
            });
        }

        update_user_count(element) {
            var parent = this;
            db.ref('users/').on('value', function (users_object) {
                var user_count = users_object.numChildren();
                element.textContent = `Кількість користувачів в мережі: ${user_count}`;


            });
        }

        add_user(name) {
            db.ref('users/' + name).set({
                name: name
            });
        }

        remove_user(name) {
            db.ref('users/' + name).remove();
        }


        display_user_count() {
            var parent = this;
            db.ref('users/').once('value', function (users_object) {
                var user_count = users_object.numChildren();
                console.log('Кількість користувачів в мережі:', user_count);
            });
        }

    }
    var app = new MEME_CHAT()
    if (app.get_name() != null) {
        app.chat()
    }
}