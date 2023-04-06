<template>
    <div>
        <div class="customizer-setting d-md-block">
            <div @click="showHideChat" class="btn-info btn-rounded shadow-lg btn btn-icon btn-lg p-2" >
                <i class='fa fa-comment fs-22'></i>
                <!-- <span
                class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">0</span> -->
            </div>
        </div>
        <div class="email-chat-detail" v-if="this.showChat">
            <div class="card mb-0">
                <div class="card-header align-items-center d-flex bg-primary text-white-50">
                    <div class="flex-grow-1">
                        <h5 class="fs-13 text-white mb-1 profile-username">LinkFuel Support</h5>
                        <p class="mb-0 fs-12 lh-1">Active</p>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="mt-n3 me-n3">
                            <button @click="showHideChat" type="button" class="btn btn-link text-white fs-16 text-decoration-none"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                </div><!-- end card header -->
                
                <div class="card-body p-0">
                    
                    <div v-if="messages.length" class="chat-conversation p-3" ref="chat_box" style="height: 250px; overflow-y: scroll; ">
                        <ul v-for="message in messages"  class="list-unstyled chat-conversation-list chat-sm" id="users-conversation">
                            <li v-if="message.sender_id == user_id"   class="chat-list right">
                                <div class="conversation-list right">
                                    <div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0 ctext-content">{{ message.message }}</p>
                                            </div>
                                            <div class="dropdown align-self-start message-box-drop">
                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                    <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-name"><small class="text-muted time">{{ moment(message.created_at).format('YYYY-MM-DD h:mm:ss a') }}</small> </div>
                                    </div>
                                </div>
                                
                                
                            </li>
                            <li v-else class="chat-list left">
                                <div class="conversation-list">
                                    <div class="chat-avatar">
                                        <img src="/images/support.jpg" alt="">
                                    </div>
                                    <div class="user-chat-content">
                                        <div class="ctext-wrap">
                                            <div class="ctext-wrap-content">
                                                <p class="mb-0 ctext-content">{{ message.message }}</p>
                                            </div>
                                            <div class="dropdown align-self-start message-box-drop">
                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                    <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-name"><small class="text-muted time">{{ moment(message.created_at).format('YYYY-MM-DD h:mm:ss a') }}</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                    </div>
                                </div>
                            </li>
                            
                            
                            <!-- chat-list -->
                            
                            
                            
                        </ul>
                    </div>
                    <div  v-else class="p-2">
                        <div class="text-center empty-cart">
                            <div class="avatar-md mx-auto my-3">
                                <div class="avatar-title bg-soft-info text-info fs-36 rounded-circle">
                                    <img src="images/customer-service.png" height="50px" width="50px">
                                </div>
                            </div>
                            <h5 class="mb-3">Need Help!</h5>
                            <p class="mb-3">We are here to help you!</p>
                        </div>
                        
                    </div>
                    
                    
                    
                    <div class="border-top border-top-dashed">
                        <div class="row g-2 mx-3 mt-2 mb-3">
                            <div class="col">
                                <div class="position-relative">
                                    <input type="text" @keyup.enter="sendMsg()" v-model="newMessage.message" class="form-control border-light bg-light" placeholder="Enter Message...">
                                </div>
                            </div><!-- end col -->
                            <div class="col-auto">
                                <button @click="sendMsg()" type="submit" class="btn btn-info"><i class="mdi mdi-send"></i></button>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div>
                </div><!-- end cardbody -->
            </div>
        </div>
    </div>
    <!-- end email chat detail -->
</template>
<script>
import { mapGetters } from 'vuex';
export default {
    props: ['user_id'],
    data(){
        return {
            showChat : false,
            newMessage: {
                sender_id : this.user_id,
                receiver_id : 0,
                message : ''
            }
        }
    },
    computed: {
        ...mapGetters({
            'messages' : 'getMessages'
        }),
        
    },  
    created(){
        
        this.$store.dispatch('fetchMessagesAction')
        Echo.channel('my-channel')
  .listen('ChatMessageEvent', (e) => {
    this.$store.dispatch('fetchMessagesAction')
    this.scrollToBottom()
    
});
        
    },
    updated: function(){
        this.scrollToBottom()
    },
    
    methods: {
        showHideChat(){
            this.showChat = !this.showChat
            //this.scrollToBottom()
        },
        sendMsg(){
            this.$store.dispatch('sendMessage',this.newMessage)
            this.newMessage.message = ""
            this.scrollToBottom()
            this.$store.dispatch('fetchMessagesAction')
            
        },
        mounted() {
            this.scrollToBottom()
        },
        scrollToBottom(){
            //var messageBody = document.getElementsByName('chat-conversation');
            var content = this.$refs.chat_box;
            content.scrollTop = content.scrollHeight
        }
        
    }
    
}
</script>