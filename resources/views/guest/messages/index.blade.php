@extends('layouts.master')

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
                          <div class="peer d-n@md+">
                            <a href="" title="" id='chat-sidebar-toggle' class="td-n c-grey-900 cH-blue-500 mR-30">
                              <i class="ti-menu"></i>
                            </a>
                          </div>
                          <div class="peer mR-20">
                            <img src="https://randomuser.me/api/portraits/men/12.jpg" alt="" class="w-3r h-3r bdrs-50p">
                          </div>
                        </div>
                        <div class="peers">
                          <a href="" class="peer td-n c-grey-900 cH-blue-500 fsz-md" title="">
                            <i class="ti-more"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="layer w-100 fxg-1 bgc-grey-200 scrollable pos-r">
                      <!-- Chat Box -->
                      <!-- {{ $prev = auth()->user()->id }} -->
                      <!-- {{ $user_id = auth()->user()->id }} -->
                      @foreach($messages as $m)
                      <div class="p-5 gapY-5">
                        <!-- Chat Conversation -->
                        <div class="peers fxw-nw {{ $m->user_id == $user_id ? 'ai-fe' : 'ai-fs' }}">
                          <div class="peer {{ $m->user_id == $user_id ? 'ord-1 mL-20' : 'ord-0 mR-20' }}">
                            <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/{{ $m->user_id == $user_id ? '12' : '11' }}.jpg" alt="avatar">
                          </div>
                          <div class="peer peer-greed {{ $m->user_id == $user_id ? 'ord-0' : 'ord-1' }}">
                            <div class="layers {{ $m->user_id == $user_id ? 'ai-fe gapY-10' : 'ai-fs gapY-5' }}">

                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer {{ $m->user_id == $user_id ? 'mL-10 ord-1' : 'mR-10 ord-0' }} ">
                                    <small>{{ date('H:iA', strtotime($m->time)) }}</small>
                                  </div>
                                  <div class="peer-greed ord-0">
                                    <span>{{ $m->content }}</span>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                      @if($prev != $m->user_id)
                        <!-- {{$prev}} -->
                        <!-- {{$prev = $m->user_id}} -->
                      @endif
                      @endforeach
                    </div>
                    <div class="layer w-100">
                      <!-- Chat Send -->
                      <div class="p-20 bdT bgc-white">
                        <div class="pos-r">
                          <input type="text" class="form-control bdrs-10em m-0" placeholder="Say something...">
                          <button id="btnSend" type="button" class="btn btn-primary bdrs-50p w-2r p-0 h-2r pos-a r-1 t-1">
                            <i class="fa fa-paper-plane-o"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
  <script>
  $('#btnSend').on('click', function(){
    alert("u clicked");
  });
  </script>
@endsection