@extends('admin.default')

@section('content')

        <!-- ### $App Screen Content ### -->
            <div class="layer h-100 fxg-1 bgc-grey-200 pos-r">

                <!-- Chat Box -->
                <div class="peer peer-greed" id='chat-box'>
                  <div class="layers h-100">
                    <div class="layer w-100">
                      <!-- Header -->
                      <div class="peers fxw-nw jc-sb ai-c pY-20 pX-30 bgc-white">
                        <div class="peers ai-c">
                          <div class="peer mR-20">
                            <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="" class="w-3r h-3r bdrs-50p">
                          </div>
                          <div class="peer mR-20">
                            Messages / <small>from admin </small>
                          </div>
                        </div>
                        <div class="peers">
                          <!-- <a href="" class="peer td-n c-grey-900 cH-blue-500 fsz-md" title="">
                            <i class="ti-more"></i>
                          </a> -->
                        </div>
                      </div>
                    </div>
                    <div id="chatBox" class="layer w-100 fxg-1 bgc-grey-200 scrollable pos-r">
                      <!-- Chat Box -->
                      <!-- {{ $prev = auth()->user()->id }} -->
                      <!-- {{ $user_id = auth()->user()->id }} -->
                      @foreach($messages as $m)
                      <div class="p-5 gapY-5">
                        <!-- Chat Conversation -->
                        <div class="peers fxw-nw {{ $m->user_id == $user_id ? 'ai-fe' : 'ai-fs' }}">
                          <div class="peer {{ $m->user_id == $user_id ? 'ord-1 mL-20' : 'ord-0 mR-20' }}">
                            <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/women/{{ $m->user_id == $user_id ? '12' : '11' }}.jpg" alt="avatar">
                          </div>
                          <div class="peer peer-greed {{ $m->user_id == $user_id ? 'ord-0' : 'ord-1' }}">
                            <div class="layers {{ $m->user_id == $user_id ? 'ai-fe gapY-10' : 'ai-fs gapY-5' }}">

                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer {{ $m->user_id == $user_id ? 'mL-10 ord-1' : 'mR-10 ord-0' }} ">
                                    <small>{{ date('h:i A', strtotime($m->time)) }}</small>
                                  </div>
                                  <div class="peer-greed {{ $m->user_id == $user_id ? 'ord-0' : 'ord-1' }}">
                                    <span>{{ $m->content }}</span>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                    <div class="layer w-100">
                      <!-- Chat Send -->
                      <div class="p-20 bdT bgc-white">
                        <div class="pos-r">
                        {{Form::open(array('id' => 'messageForm'))}}
                          <input type="hidden" name="header_id" value="{{$header_id}}">
                          <input type="text" name="message" id="message" class="form-control bdrs-10em m-0" placeholder="Say something...">
                          <button id="btnSend" type="button" class="btn btn-primary bdrs-50p w-2r p-0 h-2r pos-a r-1 t-1">
                            <i class="fa fa-paper-plane-o"></i>
                          </button>
                        {{Form::close()}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
  <script type="text/javascript" src="{{URL('js/jquery.min.js')}}"></script>
  <script>
  $(document).ready(function(){
    $("#chatBox").animate({ scrollTop: $('#chatBox').prop("scrollHeight")}, 1000);
    $('#btnSend').prop('disabled', true);
    
    $('#message').on('keyup', function(){
      var msg = $(this).val();
      if(msg == null || msg == "")
        $('#btnSend').prop('disabled', true);
      else
        $('#btnSend').prop('disabled', false);
    });

    $('#btnSend').on('click', function(){
      if($('#message').val() != null || $('#message').val() != ""){
        var message = $('#messageForm').serialize();
        $.ajax({
          headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
          type: 'POST',
          url: '/admin/message',
          data: message,
          success:function(data){
            window.location.href = '/admin/message';
          }
        });
      }
    });
  });
  </script>
@endsection
