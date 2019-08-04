<div id="chat-button">
    <a onclick="openForm()" href="javascript:void(0);" class="float open-button">
        <i class="fa fa-comment-dots my-float"></i>
        <span class="ml-1">Chat with bot</span>
    </a>
</div>
<div class="chat-popup form-container" id="myForm">
    <h3 style="padding-left: 10px;">Chat</h3>
    <div class="container" id="message-content">
        <div class="chat-container">
            <script src="<?php echo base_url(); ?>assets/vendor/chatroom-master/dist/Chatroom.js"></script>
            <script type="text/javascript">
                window.chatroom = new window.Chatroom({
                    title: "Chat with a bot",
                    container: document.querySelector(".chat-container"),
                    welcomeMessage: "Hai, dengan bot di sini. Ada yang bisa dibantu, kak?",
                    host: "http://localhost:5005",
                });
                window.chatroom.openChat();
                var element = document.getElementById("speech-input");
                element.parentNode.removeChild(element);
            </script>
        </div>
    </div>
</div>
