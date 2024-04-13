"use strict";

// Class definition
var KTAppChat = function () {
	// Private functions
	var handleSend = function (element) {
		if (!element) {
			return;
		}

		// Handle send
		KTUtil.on(element, '[data-kt-element="input"]', 'keydown', function (e) {
			if (e.keyCode == 13) {
				handleMessageIn(element);
				e.preventDefault();

				return false;
			}
		});

		KTUtil.on(element, '[data-kt-element="send"]', 'click', function (e) {
			handleMessageIn(element);
		});
	}

	var handleMessageIn = function (element) {
		var messages = element.querySelector('[data-kt-element="messages"]');
		var input = element.querySelector('[data-kt-element="input"]');

		if (input.value.length === 0) {
			return;
		}

		var value = input.value;
		// Send message to /send-chat-message (message)
		$.ajax({
			url: '/send-chat-message', // Your endpoint here
			type: 'POST',
			data: {
				message: value
			},
			success: function (response) {
				console.log('Message sent:', response);
				// append the message to the chat window here
				var message;
				var messageOutTemplate = messages.querySelector('[data-kt-element="template-out"]');

				// Show outgoing message
				message = messageOutTemplate.cloneNode(true);
				message.classList.remove('d-none');
				message.querySelector('[data-kt-element="message-text"]').innerText = value;
				input.value = '';
				//remove the data-kt-element attribute
				message.removeAttribute('data-kt-element');
				messages.appendChild(message);
				messages.scrollTop = messages.scrollHeight;
			},
			error: function (xhr, status, error) {
				// Handle error
				console.error('Message sending failed:', error);
				toastr.error("There was an error sending message, try again later.");
			}
		});
	}

	// Public methods
	return {
		init: function (element) {
			handleSend(element);
		}
	};
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
	// Init inline chat messenger
	// KTAppChat.init(document.querySelector('#kt_chat_messenger'));

	// Init drawer chat messenger
	KTAppChat.init(document.querySelector('#kt_drawer_chat_messenger'));


	// Get chat drawer instance
	var chatElement = document.querySelector("#kt_drawer_chat");
	var chatDrawer = KTDrawer.getInstance(chatElement);

	var optimusContainer = document.querySelector("#kt_content_container");
	var optimusDrawer = null;

	// Hook to chatDrawer event
	//OnShow
	chatDrawer.on("kt.drawer.show", function () {
		// Only initialize OptimusPro drawer after Chat drawer has been shown
		if (optimusDrawer == null) {
			optimusDrawer = new KTDrawer(optimusContainer);
		}

		// Show OptimusPro in a drawer
		optimusDrawer.show();
	});
	//OnHide
	chatDrawer.on("kt.drawer.hide", function () {
		// change data-kt-drawer-activate to false in optimusContainer
		optimusContainer.setAttribute("data-kt-drawer-activate", "false");
		// Update
		optimusDrawer.update();
		// Destroy
		optimusDrawer.destroy();
		optimusDrawer = null;
		// restore the data-kt-drawer-activate to true in optimusContainer
		optimusContainer.setAttribute("data-kt-drawer-activate", "true");
	});
});
