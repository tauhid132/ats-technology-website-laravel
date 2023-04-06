<template>
    <div class="chat-wrapper d-lg-flex gap-1 mx-n4 mt-n4 p-1">
        <div class="chat-leftsidebar border mt-5">
            <div class="px-4 pt-4 ">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h5 class="mb-4">Chats</h5>
                    </div>
                </div>
                <!-- <div class="search-box">
                    <input type="text" class="form-control bg-light border-light" placeholder="Search here...">
                    <i class="ri-search-2-line search-icon"></i>
                </div> -->
            </div>
            
            <div class="tab-content text-muted">
                <div class="tab-pane active" id="chats" role="tabpanel">
                    <div class="chat-room-list pt-3" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: -16px 0px 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 16px 0px 0px;">
                                            <div class="chat-message-list">
                                                <ul class="list-unstyled chat-list chat-user-list" id="userList">
                                                    
                                                    <li v-for="user in chatUsers" >
                                                        <a @click="selectChat(user)">
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                                                    <div class="avatar-xxs">
                                                                        <img src="/images/user-avater.webp" class="rounded-circle img-fluid userprofile" alt=""><span class="user-status"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-grow-1 overflow-hidden">
                                                                    <p class="text-truncate mb-0">{{ user.first_name }} {{ user.last_name }}</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: auto; height: 653px;">
                            </div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;">
                            </div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar" style="height: 217px; display: block; transform: translate3d(0px, 57px, 0px);">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        
        <div class="user-chat w-100 overflow-hidden border mt-5">
            
            <div class="chat-content d-lg-flex">
                
                <div class="w-100 overflow-hidden position-relative">
                    <div class="position-relative">
                        <div class="position-relative" id="users-chat">
                            <div class="p-3 user-chat-topbar">
                                <div class="row align-items-center">
                                    <div class="col-sm-4 col-8">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 d-block d-lg-none me-3">
                                                <a href="javascript: void(0);" class="user-chat-remove fs-18 p-1"><i class="ri-arrow-left-s-line align-bottom"></i></a>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 chat-user-img online user-own-img align-self-center me-3 ms-0">
                                                        <img src="/images/user-avater.webp" class="rounded-circle avatar-xs" alt="">
                                                        <span class="user-status"></span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="text-truncate mb-0 fs-16"><a class="text-reset username" data-bs-toggle="offcanvas" href="#userProfileCanvasExample" aria-controls="userProfileCanvasExample">{{  this.selectedChat.first_name }} {{  this.selectedChat.last_name }}</a></h5>
                                                        <p class="text-truncate text-muted fs-14 mb-0 userStatus"><small>User</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <!-- end chat user head -->
                            <div class="chat-conversation p-3 p-lg-4 " ref="chat_box" id="chat-conversation" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: -16px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 16px;">
                                                    <div id="elmLoader"></div>
                                                    <ul v-for="mes in this.chatMessages" class="list-unstyled chat-conversation-list" id="users-conversation">
                                                        <li v-if="mes.sender_id == selectedChat.id" class="chat-list left" id="1">
                                                            <div  class="conversation-list">
                                                                <div class="chat-avatar"><img src="/images/user-avater.webp" alt=""></div>
                                                                <div class="user-chat-content">
                                                                    <div class="ctext-wrap">
                                                                        <div class="ctext-wrap-content" id="1">
                                                                            <p class="mb-0 ctext-content">{{ mes.message }}</p>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="conversation-name"><span class="d-none name">Lisa Parker</span><small class="text-muted time">09:07 am</small> <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span></div>
                                                                </div>
                                                            </div>
                                                            
                                                        </li>
                                                        <li v-else class="chat-list right" id="2"> 
                                                            <div class="conversation-list">
                                                                <div class="user-chat-content">
                                                                    <div class="ctext-wrap">
                                                                        <div class="ctext-wrap-content" id="2">
                                                                            <p class="mb-0 ctext-content">{{ mes.message }}</p>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="conversation-name"><span class="d-none name">Frank Thomas</span><small class="text-muted time">09:08 am</small> <span class="text-success check-message-icon"><i class="bx bx-check-double"></i></span></div></div>  
                                                                </div>   
                                                            </li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: auto; height: 663px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                        <div class="simplebar-scrollbar" style="height: 238px; display: block; transform: translate3d(0px, 27px, 0px);"></div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                            
                            <div class="chat-input-section p-3 p-lg-4">
                                
                                
                                <div class="row g-0 align-items-center">
                                    <div class="col-auto">
                                        <div class="chat-input-links me-2">
                                            <div class="links-list-item">
                                                <button type="button" class="btn btn-link text-decoration-none emoji-btn" id="emoji-btn">
                                                    <i class="bx bx-smile align-middle"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col">
                                        <div class="chat-input-feedback">
                                            Please Enter a Message
                                        </div>
                                        <input type="text" @keyup.enter="sendMessage()" v-model="sendMessageTo.messageText" class="form-control chat-input bg-light border-light fs-13" id="chat-input" placeholder="Type your message..." autocomplete="off">
                                    </div>
                                    <div class="col-auto">
                                        <div class="chat-input-links ms-2">
                                            <div class="links-list-item">
                                                <button type="submit" @click="sendMessage()" class="btn btn-success chat-send waves-effect waves-light fs-13">
                                                    <i class="ri-send-plane-2-fill align-bottom"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </template>
    <script>
    import axios from 'axios';
    
    export default {
        data(){
            return{
                chatUsers : [] ,
                selectedChat : {
                    first_name: '',
                    last_name: '',
                    id: ''
                },
                chatMessages: [],
                sendMessageTo : {
                    receiver_id: '',
                    messageText: ''
                }
            }
        },
        created(){
            this.getChatUsers()
            Echo.channel('my-channel')
            .listen('ChatMessageEvent', (e) => {
                this.getChatMessages()
                this.scrollToBottom()
                
            });
            
        },
        updated: function(){
            this.scrollToBottom()
        },
        methods : { 
            async getChatUsers(){
                const res = await axios.get('messages/getChatUsers') 
                this.chatUsers = res.data
            },
            async getChatMessages(){
                //alert(this.selectedChat.id)
                const res = await axios.post('messages/fetchMessages/'+this.selectedChat.id) 
                this.chatMessages = res.data
                this.scrollToBottom()
            },
            selectChat(user){
                this.selectedChat.first_name = user.first_name
                this.selectedChat.id = user.id
                this.getChatMessages()
                this.sendMessageTo.receiver_id = user.id
            },
            async sendMessage(){
                //alert(this.sendMessageTo.receiver_id)
                const res = await axios.post('messages/sendMessage',this.sendMessageTo) 
                this.getChatMessages()
                this.sendMessageTo.messageText =""
            },
            scrollToBottom(){
                //var messageBody = document.getElementsByName('chat-conversation');
                var content = this.$refs.chat_box;
                content.scrollTop = content.scrollHeight
                
            }
            
        }
    }
</script>