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
            // this.create_title();
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

            var title = document.createElement('h1')
            title.setAttribute('id', 'title')
            title.textContent = 'StudyPals'

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

            li1.style.marginTop = "413px";
            li2.style.marginTop = "413px";
            li2.style.marginLeft = "96.5px";

            li1.style.position = "absolute";
            li2.style.position = "absolute";
            // Create container for footer content
            const container = document.createElement('div');
            container.classList.add('container', 'mb-1');

            container.style.marginTop = '454px'; // Adjust height as needed
            container.style.position = 'absolute';
            container.style.marginLeft = '150px';

            const footerContent = document.createElement('footer');
            footerContent.classList.add('d-flex', 'flex-wrap', 'justify-content-between', 'align-items-center', 'py-3', 'my-4', 'border-top');

            // Left side content
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
            span.style.fontFamily = 'Arial, sans-serif'; // Change the font family here
            span.style.fontWeight = 'normal';
            span.style.paddingLeft = "30px";
            span.style.paddingTop = "8px";
            span.textContent = '© 2024 StudyPals, Inc. All rights reserved.';

            leftContent.appendChild(logoLink);
            leftContent.appendChild(span);

            // Right side content
            const rightContent = document.createElement('ul');
            rightContent.classList.add('nav', 'col-md-4', 'justify-content-end', 'list-unstyled', 'd-flex');

            // Append elements
            footerContent.appendChild(leftContent);
            footerContent.appendChild(rightContent);
            container.appendChild(footerContent);
            footer.appendChild(ul);
            footer.appendChild(container);

            document.body.appendChild(footer);
        }

        create_home_title() {
            // Create the outer header container
            var header = document.createElement('header');
            header.classList.add('p-3', 'text-white');

            var container = document.createElement('div');
            container.classList.add('container');

            var dFlex = document.createElement('div');
            dFlex.classList.add('d-flex', 'flex-wrap', 'align-items-center', 'justify-content-center', 'justify-content-lg-start');

            // Logo link
            var logoLink = document.createElement('a');
            logoLink.href = 'website.html';
            logoLink.classList.add('d-flex', 'align-items-center', 'mb-2', 'mb-lg-0', 'text-white', 'text-decoration-none');

            var logoImage = document.createElement('img');
            logoImage.src = 'logo.png';
            logoImage.alt = 'mdo';
            logoImage.width = 180;
            logoImage.height = 140;

            logoLink.appendChild(logoImage);

            // Navigation
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
                        { href: '#', text: 'Відеоуроки' },
                        { href: '#', text: 'Аудіоуроки' },
                    ]
                },
                { href: '#', text: 'Форум', class: 'text-info' },
                { href: '#', text: 'Чат', class: 'text-info' },
                { href: '#', text: 'Додаткові уроки', class: 'text-info' },
                { href: '#', text: 'Магазин', class: 'text-info' },
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

            // Login and Register buttons
            var textEnd = document.createElement('div');
            textEnd.classList.add('text-end');

            // Assemble the header
            dFlex.appendChild(logoLink);
            dFlex.appendChild(nav);
            dFlex.appendChild(textEnd);
            container.appendChild(dFlex);
            header.appendChild(container);

            // Append the header to the body
            document.body.appendChild(header);
        }

        create_join_form() {
            // YOU MUST HAVE (PARENT = THIS). OR NOT. I'M NOT YOUR BOSS!😂
            var parent = this;

            var join_container = document.createElement('div')
            join_container.setAttribute('id', 'join_container')
            var join_inner_container = document.createElement('div')
            join_inner_container.setAttribute('id', 'join_inner_container')

            var chat_hint = document.createElement('h6');
            chat_hint.textContent = "Приєднуйся до чату";
            chat_hint.style.color = "white"; 
            chat_hint.style.marginTop = "-230px"; 
            chat_hint.style.marginLeft = "-280px";
            chat_hint.style.position = "absolute";
            join_container.appendChild(chat_hint);

            join_inner_container.style.marginTop = "200px";

            join_container.style.marginTop = '-16px';
            join_container.style.marginLeft = "0px";
            join_container.style.backgroundColor = "rgba(20,162,184,255)";
            join_container.style.width = "100vw";
            join_container.style.height = "413px";

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
            // Every time we type into the join_input
            join_input.onkeyup = function () {
                // If the input we have is longer that 0 letters
                if (join_input.value.length > 0) {
                    // Make the button light up
                    join_button.classList.add('enabled')
                    // Allow the user to click the button
                    join_button.onclick = function () {
                        // Save the name to local storage. Passing in
                        // the join_input.value
                        parent.save_name(join_input.value)
                        // Remove the join_container. So the site doesn't look weird.
                        join_container.remove()
                        // parent = this. But it is not the join_button
                        // It is (MEME_CHAT = this).
                        parent.create_chat()
                    }
                } else {
                    // If the join_input is empty then turn off the
                    // join button
                    join_button.classList.remove('enabled')
                }
            }

            // Append everything to the body
            join_button_container.append(join_button)
            join_input_container.append(join_input)
            join_inner_container.append(join_input_container, join_button_container)
            join_container.append(join_inner_container)
            document.body.append(join_container)
        }
        // create_load() creates a loading circle that is used in the chat container
        create_load(container_id) {
            // YOU ALSO MUST HAVE (PARENT = THIS). BUT IT'S WHATEVER THO.
            var parent = this;

            // This is a loading function. Something cool to have.
            var container = document.getElementById(container_id)
            container.innerHTML = ''

            var loader_container = document.createElement('div')
            loader_container.setAttribute('class', 'loader_container')

            var loader = document.createElement('div')
            loader.setAttribute('class', 'loader')

            loader_container.append(loader)
            container.append(loader_container)

        }

        // create_chat() creates the chat container and stuff
        create_chat() {
            // Again! You need to have (parent = this)
            var parent = this;
            // GET THAT MEMECHAT HEADER OUTTA HERE
            var title_container = document.getElementById('title_container')
            var title = document.getElementById('title')
            title_container.classList.add('chat_title_container')
            // Make the title smaller by making it 'chat_title'
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
            chat_input_send.innerHTML = `<i class="far fa-paper-plane"></i>`

            var chat_input = document.createElement('input')
            chat_input.setAttribute('id', 'chat_input')
            // Only a max message length of 1000
            chat_input.setAttribute('maxlength', 1000)
            // Get the name of the user
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
                        // Enable the loading circle in the 'chat_content_container'
                        parent.create_load('chat_content_container')
                        // Send the message. Pass in the chat_input.value
                        parent.send_message(chat_input.value)
                        // Clear the chat input box
                        chat_input.value = ''
                        // Focus on the input just after
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
            chat_logout.textContent = `${parent.get_name()} • logout`
            // "Logout" is really just deleting the name from the localStorage
            chat_logout.onclick = function () {
                localStorage.clear()
                // Go back to home page
                parent.home()
            }

            chat_logout_container.append(chat_logout)
            chat_input_container.append(chat_input, chat_input_send)
            chat_inner_container.append(chat_content_container, chat_input_container, chat_logout_container)
            chat_container.append(chat_inner_container)
            document.body.append(chat_container)
            // After creating the chat. We immediatly create a loading circle in the 'chat_content_container'
            parent.create_load('chat_content_container')
            // then we "refresh" and get the chat data from Firebase
            parent.refresh_chat()
        }
        // Save name. It literally saves the name to localStorage
        save_name(name) {
            // Save name to localStorage
            localStorage.setItem('name', name)
        }
        // Sends message/saves the message to firebase database
        send_message(message) {
            var parent = this
            // if the local storage name is null and there is no message
            // then return/don't send the message. The user is somehow hacking
            // to send messages. Or they just deleted the
            // localstorage themselves. But hacking sounds cooler!!
            if (parent.get_name() == null && message == null) {
                return
            }

            // Get the firebase database value
            db.ref('chats/').once('value', function (message_object) {
                // This index is mortant. It will help organize the chat in order
                var index = parseFloat(message_object.numChildren()) + 1
                db.ref('chats/' + `message_${index}`).set({
                    name: parent.get_name(),
                    message: message,
                    index: index
                })
                    .then(function () {
                        // After we send the chat refresh to get the new messages
                        parent.refresh_chat()
                    })
            })
        }
        // Get name. Gets the username from localStorage
        get_name() {
            // Get the name from localstorage
            if (localStorage.getItem('name') != null) {
                return localStorage.getItem('name')
            } else {
                this.home()
                return null
            }
        }
        // Refresh chat gets the message/chat data from firebase
        refresh_chat() {
            var chat_content_container = document.getElementById('chat_content_container')

            // Get the chats from firebase
            db.ref('chats/').on('value', function (messages_object) {
                // When we get the data clear chat_content_container
                chat_content_container.innerHTML = ''
                // if there are no messages in the chat. Retrun . Don't load anything
                if (messages_object.numChildren() == 0) {
                    return
                }

                // OK! SO IF YOU'RE A ROOKIE CODER. THIS IS GOING TO BE
                // SUPER EASY-ISH! I THINK. MAYBE NOT. WE'LL SEE!

                // convert the message object values to an array.
                var messages = Object.values(messages_object.val());
                var guide = [] // this will be our guide to organizing the messages
                var unordered = [] // unordered messages
                var ordered = [] // we're going to order these messages

                for (var i, i = 0; i < messages.length; i++) {
                    // The guide is simply an array from 0 to the messages.length
                    guide.push(i + 1)
                    // unordered is the [message, index_of_the_message]
                    unordered.push([messages[i], messages[i].index]);
                }

                // Now this is straight up from stack overflow 🤣
                // Sort the unordered messages by the guide
                guide.forEach(function (key) {
                    var found = false
                    unordered = unordered.filter(function (item) {
                        if (!found && item[1] == key) {
                            // Now push the ordered messages to ordered array
                            ordered.push(item[0])
                            found = true
                            return false
                        } else {
                            return true
                        }
                    })
                })

                // Now we're done. Simply display the ordered messages
                ordered.forEach(function (data) {
                    var name = data.name
                    var message = data.message

                    var message_container = document.createElement('div')
                    message_container.setAttribute('class', 'message_container')

                    var message_inner_container = document.createElement('div')
                    message_inner_container.setAttribute('class', 'message_inner_container')

                    var message_user_container = document.createElement('div')
                    message_user_container.setAttribute('class', 'message_user_container')

                    var message_user = document.createElement('p')
                    message_user.setAttribute('class', 'message_user')
                    message_user.textContent = `${name}`

                    var message_content_container = document.createElement('div')
                    message_content_container.setAttribute('class', 'message_content_container')

                    var message_content = document.createElement('p')
                    message_content.setAttribute('class', 'message_content')
                    message_content.textContent = `${message}`

                    message_user_container.append(message_user)
                    message_content_container.append(message_content)
                    message_inner_container.append(message_user_container, message_content_container)
                    message_container.append(message_inner_container)

                    chat_content_container.append(message_container)
                });
                // Go to the recent message at the bottom of the container
                chat_content_container.scrollTop = chat_content_container.scrollHeight;
            })

        }
    }
    var app = new MEME_CHAT()
    if (app.get_name() != null) {
        app.chat()
    }
}