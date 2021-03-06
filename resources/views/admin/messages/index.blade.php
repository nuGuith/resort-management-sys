@extends('layouts.master')

@section('content')

        <!-- ### $App Screen Content ### -->
            <div class="layer h-100 fxg-1 bgc-grey-200 pos-r">
              <div class="peers fxw-nw pos-r">
                <!-- Sidebar -->
                <div class="peer bdR" id="chat-sidebar">
                  <div class="layers h-100">
                    <!-- Search -->
                    <div class="bdB layer w-100">
                      <input type="text" placeholder="Search contacts..." name="chatSearch" class="form-constrol p-15 bdrs-0 w-100 bdw-0">
                    </div>

                    <!-- List -->
                    <div class="layer w-100 fxg-1 scrollable pos-r">

                      <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                        <div class="peer">
                          <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="" class="w-3r h-3r bdrs-50p">
                        </div>
                        <div class="peer peer-greed pL-20">
                          <h6 class="mB-0 lh-1 fw-400">John Dizon</h6>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

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
                      <div class="p-20 gapY-15">
                        <!-- Chat Conversation -->
                        <div class="peers fxw-nw">
                          <div class="peer mR-20">
                            <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/11.jpg" alt="">
                          </div>
                          <div class="peer peer-greed">
                            <div class="layers ai-fs gapY-5">
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mR-10">
                                    <small>09:59 AM</small>
                                  </div>
                                  <div class="peer-greed">
                                    <span>Hello po</span>
                                  </div>
                                </div>
                              </div>
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mR-10">
                                    <small>09:59 AM</small>
                                  </div>
                                  <div class="peer-greed">
                                    <span>nagpareserve po ako</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Chat Conversation -->
                        <div class="peers fxw-nw ai-fe">
                          <div class="peer ord-1 mL-20">
                            <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/12.jpg" alt="">
                          </div>
                          <div class="peer peer-greed ord-0">
                            <div class="layers ai-fe gapY-10">
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mL-10 ord-1">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed ord-0">
                                    <span>Good day!</span>
                                  </div>
                                </div>
                              </div>
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mL-10 ord-1">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed ord-0">
                                    <span>this is the admin of Carina's place.</span>
                                  </div>
                              </div>
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mL-10 ord-1">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed ord-0">
                                    <span>remind ko lang po yung sa downpayment.</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="layer w-100">
                      <!-- Chat Send -->
                      <div class="p-20 bdT bgc-white">
                        <div class="pos-r">
                          <input type="text" class="form-control bdrs-10em m-0" placeholder="Say something...">
                          <button type="button" class="btn btn-primary bdrs-50p w-2r p-0 h-2r pos-a r-1 t-1">
                            <i class="fa fa-paper-plane-o"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        
@endsection