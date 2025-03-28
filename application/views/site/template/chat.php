// view/site/template/chat.php

<div class="section-form-chat pt-100 pb-100">
    <div class="bg-img">
        <img src="<?= base_url('assets/images/components/bg-chatbot1.png'); ?>" alt="Chatbot">
    </div>
    <div class="container">
        <div class="heading2 text-center">AI chat bot</div>
        <div class="body2 text-placehover text-center mt-24">
            Power up your website with our advanced chatbot that offers image and video tools.
        </div>
        <div class="row flex-center">
            <div class="col-sm-11">
                <div class="form-chat-block mt-60">
                    <div class="form-content bora-16 overflow-hidden">
                        <div class="heading bg-blue pt-28 pb-28 pl-40 pr-40 flex-between">
                            <div class="text-button">How can I help you?</div>
                            <div class="new-chat flex-item-center gap-8">
                                <div class="text-button">New chat</div>
                                <i class="ph-bold ph-plus"></i>
                            </div>
                        </div>
                        <div class="content p-40 bg-on-surface">
                            <ul class="chatbox"></ul>
                            <div class="form-chat p-12 bora-99 flex-between gap-16">
                                <textarea class="text-white" placeholder="Send a message..."></textarea>
                                <span class="flex-center" id="send-chat-btn">
                                    <i class="ph ph-paper-plane-tilt fs-20"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>