<div id="chat_box" class="chat_box pull-right" style="display: none">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="padding: 5px;">
                    <h5 class="card-title"><i class="chat-user"></i> 
                        <a type='button' class='btn close-chat float-end' aria-label='Close' style="line-height: 10px; font-size:30px; padding: 15px 0;">
                            <span aria-hidden='true'><strong>&times;</strong></span>
                        </a>
                    </h5>
                    <div class="card-text chat-area">
                    </div
                    <div>
                        <div class="input-group form-controls">
                            <!--<button type="button" class="btn btn-default btn-sm upload-btn">
                                <i class="glyphicon glyphicon-picture"></i>
                            </button>-->
                            <textarea class="form-control input-sm chat_input" placeholder="Write your message here..."></textarea>
                            <button class="btn btn-primary btn-sm btn-chat" type="button" data-to-user="" disabled>
                                <i class="glyphicon glyphicon-send"></i>
                                Send</button>
                        </div>
                        <form method="post" enctype="multipart/form-data" class="upload-frm" style="display: none">
                            <input type="file" name="image" class="image" accept="image/png, image/gif, image/jpeg"  />
                        </form>

                        <!--<div class="emoji-list">
                            <ul>
                                <li><a href="javascript:void(0);" class="emoji">&#128512;</a></li>
                                <li><a href="javascript:void(0);" class="emoji">&#128513;</a></li>
                                <li><a href="javascript:void(0);" class="emoji">&#128514;</a></li>
                                <li><a href="javascript:void(0);" class="emoji">&#128515;</a></li>
                                <li><a href="javascript:void(0);" class="emoji">&#128516;</a></li>
                                <li><a href="javascript:void(0);" class="emoji">&#128517;</a></li>
                                <li><a href="javascript:void(0);" class="emoji">&#128518;</a></li>
                                <li><a href="javascript:void(0);" class="emoji">&#128519;</a></li>
                                <li><a href="javascript:void(0);" class="emoji">&#128520;</a></li>
                                <li><a href="javascript:void(0);" class="emoji">&#128521;</a></li>
                                <li><a href="javascript:void(0);" class="emoji">&#128522;</a></li>
                                <li><a href="javascript:void(0);" class="emoji">&#128523;</a></li>
                                <li><a href="javascript:void(0);" class="emoji">&#128524;</a></li>
                                <li><a href="javascript:void(0);" class="emoji">&#128525;</a></li>
                                <li><a href="javascript:void(0);" class="emoji">&#128526;</a></li>
                                <li><a href="javascript:void(0);" class="emoji">&#128527;</a></li>
                                <li><a href="javascript:void(0);" class="emoji">&#128528;</a></li>
                                <li><a href="javascript:void(0);" class="emoji">&#128529;</a></li>
                            </ul>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" class="to_user_id" value="" />
</div>
