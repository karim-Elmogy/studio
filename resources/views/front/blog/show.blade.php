@extends('front.layout.app')

@section('content')

    <main>


        <!-- postbox area start -->
        <div class="tp-blog-details-without-ptb">
            <div class="container container-1230">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-blog-details-without-heading text-center">
                            <article class="postbox-details-item mb-20">
                                <div class="postbox-details-info-wrap">
                                    <div class="postbox-tag postbox-details-tag">
                                                <span>
                                                    <i>
                                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.39101 4.39135H4.39936M13.6089 8.73899L8.74578 13.6021C8.61979 13.7283 8.47018 13.8283 8.3055 13.8966C8.14082 13.9649 7.9643 14 7.78603 14C7.60777 14 7.43124 13.9649 7.26656 13.8966C7.10188 13.8283 6.95228 13.7283 6.82629 13.6021L1 7.78264V1H7.78264L13.6089 6.82629C13.8616 7.08045 14.0034 7.42427 14.0034 7.78264C14.0034 8.14102 13.8616 8.48483 13.6089 8.73899Z" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </i>
                                                    {{ $blog->getTranslatedCategory() }}
                                                </span>
                                        <span>4 min read</span>
                                    </div>
                                    <h4 class="postbox-title fs-80">{!! nl2br(e($blog->getTranslatedTitle())) !!}</h4>
                                    <div class="postbox-details-meta d-flex align-items-center justify-content-center">
                                        <div class="postbox-author-box d-flex align-items-center ">
                                            <div class="postbox-author-img">
                                                @if($blog->author_image)
                                                    <img src="{{ asset('storage/' . $blog->author_image) }}" alt="{{ $blog->author_name }}">
                                                @else
                                                    <img src="{{asset('front/assets/img/blog/blog-standard/blog-av-2.jpg')}}" alt="">
                                                @endif
                                            </div>
                                            <div class="postbox-author-info">
                                                <h4 class="postbox-author-name">{{ $blog->author_name ?? 'Admin' }}</h4>
                                            </div>
                                        </div>
                                        <div class="postbox-meta">
                                            <i>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 4.19997V8.99997L12.2 10.6M17 9C17 13.4183 13.4183 17 9 17C4.58172 17 1 13.4183 1 9C1 4.58172 4.58172 1 9 1C13.4183 1 17 4.58172 17 9Z" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </i>
                                            <span>{{ $blog->getFormattedDate() }}</span>
                                        </div>
                                        <div class="postbox-meta">
                                            <i>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17 8.55557C17.003 9.72878 16.7289 10.8861 16.2 11.9333C15.5728 13.1882 14.6086 14.2437 13.4155 14.9816C12.2223 15.7195 10.8473 16.1106 9.44443 16.1111C8.27122 16.1142 7.11387 15.8401 6.06666 15.3111L1 17L2.68889 11.9333C2.15994 10.8861 1.88583 9.72878 1.88889 8.55557C1.88943 7.15269 2.28054 5.77766 3.01841 4.58451C3.75629 3.39135 4.81178 2.42719 6.06666 1.80002C7.11387 1.27107 8.27122 0.996966 9.44443 1.00003H9.88887C11.7416 1.10224 13.4916 1.88426 14.8037 3.19634C16.1157 4.50843 16.8978 6.25837 17 8.11113V8.55557Z" stroke="white" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </i>
                                            <span>0 comments</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- postbox area end -->


        <!-- postbox area start -->
        <section id="postbox" class="postbox-area tp-blog-details-ptb pt-110 pb-80">
            <div class="container container-1750">
                <div class="tp-blog-details-banner fix mb-100">
                    <img data-speed=".8" src="{{ $blog->getImageUrl() }}" alt="{{ $blog->getTranslatedTitle() }}">
                </div>
            </div>
            <div class="container container-1230">
                <div class="row justify-content-center">
                    <div class="col-lg-2">
                        <div class="creative-footer-style blog-details-social">
                            <div class="tp-footer-widget-social">
                                <div class="tp_fade_anim" data-delay=".9" data-fade-from="top" data-ease="bounce" style="translate: none; rotate: none; scale: none; transform: translate(0px); opacity: 1;">
                                    <a href="#">
                                                <span>
                                                    <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.82727 6.83333C1.14284 6.83333 1 6.96763 1 7.61111V8.77778C1 9.42126 1.14284 9.55556 1.82727 9.55556H3.48182V14.2222C3.48182 14.8657 3.62466 15 4.30909 15H5.96364C6.64807 15 6.79091 14.8657 6.79091 14.2222V9.55556H8.64871C9.1678 9.55556 9.30155 9.4607 9.44416 8.99145L9.7987 7.82478C10.043 7.02095 9.89246 6.83333 9.00326 6.83333H6.79091V4.88889C6.79091 4.45933 7.16129 4.11111 7.61818 4.11111H9.97273C10.6572 4.11111 10.8 3.97681 10.8 3.33333V1.77778C10.8 1.1343 10.6572 1 9.97273 1H7.61818C5.33373 1 3.48182 2.74111 3.48182 4.88889V6.83333H1.82727Z" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                    </a>
                                </div>
                                <div class="tp_fade_anim" data-delay=".7" data-fade-from="top" data-ease="bounce" style="translate: none; rotate: none; scale: none; transform: translate(0px); opacity: 1;">
                                    <a href="#">
                                                <span>
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41177 0H0L5.23083 6.87316L0.334618 12.6389H2.59681L6.29998 8.27809L9.58823 12.5988H14L8.6172 5.52593L8.62673 5.53813L13.2614 0.0802914H10.9992L7.55741 4.13336L4.41177 0ZM2.43522 1.20371H3.80866L11.5648 11.395H10.1913L2.43522 1.20371Z" fill="currentcolor"></path>
                                                    </svg>
                                                </span>
                                    </a>
                                </div>
                                <div class="tp_fade_anim" data-delay=".5" data-fade-from="top" data-ease="bounce" style="translate: none; rotate: none; scale: none; transform: translate(0px); opacity: 1;">
                                    <a href="#">
                                                <span>
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.9989 10.0113C16.2575 9.87227 15.4949 9.7998 14.7168 9.7998C10.435 9.7998 6.62665 11.9938 4.19922 15.3997M14.5997 3.39941C12.0962 6.33329 8.33416 8.19931 4.12763 8.19931C3.05145 8.19931 2.00436 8.07718 1 7.84627M11.0941 17.0005C11.2946 16.0293 11.3999 15.0235 11.3999 13.9931C11.3999 8.94036 8.86738 4.47788 5 1.80078M16.9997 8.99983C16.9997 13.418 13.418 16.9997 8.99983 16.9997C4.58165 16.9997 1 13.418 1 8.99983C1 4.58165 4.58165 1 8.99983 1C13.418 1 16.9997 4.58165 16.9997 8.99983Z" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                    </a>
                                </div>
                                <div class="tp_fade_anim" data-delay=".3" data-fade-from="top" data-ease="bounce" style="translate: none; rotate: none; scale: none; transform: translate(0px); opacity: 1;">
                                    <a href="#">
                                                <span>
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.0586 4.94727C12.6109 4.94727 13.0586 4.49955 13.0586 3.94727C13.0586 3.39498 12.6109 2.94727 12.0586 2.94727V4.94727ZM12.0496 2.94727C11.4973 2.94727 11.0496 3.39498 11.0496 3.94727C11.0496 4.49955 11.4973 4.94727 12.0496 4.94727V2.94727ZM8 14C6.32181 14 5.16377 13.9979 4.2928 13.8808C3.45059 13.7675 3.02803 13.5636 2.73223 13.2678L1.31802 14.682C2.04735 15.4113 2.96231 15.7199 4.0263 15.8629C5.06152 16.0021 6.37835 16 8 16V14ZM0 8C0 9.62165 -0.00212373 10.9385 0.137058 11.9737C0.280107 13.0377 0.588687 13.9526 1.31802 14.682L2.73223 13.2678C2.43644 12.972 2.23246 12.5494 2.11922 11.7072C2.00212 10.8362 2 9.67819 2 8H0ZM14 8C14 9.67819 13.9979 10.8362 13.8808 11.7072C13.7675 12.5494 13.5636 12.972 13.2678 13.2678L14.682 14.682C15.4113 13.9526 15.7199 13.0377 15.8629 11.9737C16.0021 10.9385 16 9.62165 16 8H14ZM8 16C9.62165 16 10.9385 16.0021 11.9737 15.8629C13.0377 15.7199 13.9526 15.4113 14.682 14.682L13.2678 13.2678C12.972 13.5636 12.5494 13.7675 11.7072 13.8808C10.8362 13.9979 9.67819 14 8 14V16ZM8 2C9.67819 2 10.8362 2.00212 11.7072 2.11922C12.5494 2.23246 12.972 2.43644 13.2678 2.73223L14.682 1.31802C13.9526 0.588687 13.0377 0.280107 11.9737 0.137058C10.9385 -0.00212373 9.62165 0 8 0V2ZM16 8C16 6.37835 16.0021 5.06152 15.8629 4.0263C15.7199 2.96231 15.4113 2.04735 14.682 1.31802L13.2678 2.73223C13.5636 3.02803 13.7675 3.45059 13.8808 4.2928C13.9979 5.16377 14 6.32181 14 8H16ZM8 0C6.37835 0 5.06152 -0.00212373 4.0263 0.137058C2.96231 0.280107 2.04735 0.588687 1.31802 1.31802L2.73223 2.73223C3.02803 2.43644 3.45059 2.23246 4.2928 2.11922C5.16377 2.00212 6.32181 2 8 2V0ZM2 8C2 6.32181 2.00212 5.16377 2.11922 4.2928C2.23246 3.45059 2.43644 3.02803 2.73223 2.73223L1.31802 1.31802C0.588687 2.04735 0.280107 2.96231 0.137058 4.0263C-0.00212373 5.06152 0 6.37835 0 8H2ZM10.3171 8.00134C10.3171 9.28031 9.28031 10.3171 8.00134 10.3171V12.3171C10.3849 12.3171 12.3171 10.3849 12.3171 8.00134H10.3171ZM8.00134 10.3171C6.72236 10.3171 5.68555 9.28031 5.68555 8.00134H3.68555C3.68555 10.3849 5.61779 12.3171 8.00134 12.3171V10.3171ZM5.68555 8.00134C5.68555 6.72236 6.72236 5.68555 8.00134 5.68555V3.68555C5.61779 3.68555 3.68555 5.61779 3.68555 8.00134H5.68555ZM8.00134 5.68555C9.28031 5.68555 10.3171 6.72236 10.3171 8.00134H12.3171C12.3171 5.61779 10.3849 3.68555 8.00134 3.68555V5.68555ZM12.0586 2.94727H12.0496V4.94727H12.0586V2.94727Z" fill="#141414"></path>
                                                    </svg>
                                                </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="postbox-wrapper mb-115">
                            <div class="postbox-details-text mb-45">
                                {!! $blog->getTranslatedContent() !!}
                            </div>
                            <div class="postbox-details-tag-wrap d-flex justify-content-between align-items-center">
                                <div class="postbox-details-tag d-flex align-items-center mb-0">
                                    <span>Tagged with :</span>
                                    <div class="tagcloud">
                                        @if($blog->tags)
                                            @foreach($blog->tags as $tag)
                                                <a href="#">{{ is_array($tag) ? ($tag[app()->getLocale()] ?? $tag['en'] ?? '') : $tag }}</a>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="postbox-details-social">
                                    <a href="#">
                                                <span>
                                                    <svg width="18" height="17" viewBox="0 0 11 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.77219 6.41667C1.13333 6.41667 1 6.54137 1 7.13889V8.22222C1 8.81974 1.13333 8.94444 1.77219 8.94444H3.31657V13.2778C3.31657 13.8753 3.4499 14 4.08876 14H5.63314C6.272 14 6.40533 13.8753 6.40533 13.2778V8.94444H8.13944C8.62396 8.94444 8.74881 8.85636 8.88192 8.42063L9.21286 7.3373C9.44088 6.59088 9.30037 6.41667 8.47038 6.41667H6.40533V4.61111C6.40533 4.21224 6.75106 3.88889 7.17752 3.88889H9.3753C10.0142 3.88889 10.1475 3.76419 10.1475 3.16667V1.72222C10.1475 1.1247 10.0142 1 9.3753 1H7.17752C5.04518 1 3.31657 2.61675 3.31657 4.61111V6.41667H1.77219Z" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                    </a>
                                    <a href="#">
                                                <span>
                                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.67227 0H0L6.72535 8.79151L0.430223 16.1665H3.33876L8.09997 10.5886L12.3277 16.1153H18L11.0793 7.06826L11.0915 7.08386L17.0504 0.102701H14.1418L9.71667 5.28701L5.67227 0ZM3.131 1.53968H4.89685L14.869 14.5755H13.1032L3.131 1.53968Z" fill="currentcolor" />
                                                    </svg>
                                                </span>
                                    </a>
                                    <a href="#">
                                                <span>
                                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.9994 10.5256C17.2116 10.3786 16.4014 10.302 15.5746 10.302C11.025 10.302 6.97863 12.6212 4.39943 16.2214M15.45 3.53634C12.79 6.63763 8.79271 8.61014 4.32318 8.61014C3.17971 8.61014 2.06716 8.48103 1 8.23695M11.7254 17.9135C11.9384 16.8869 12.0503 15.8237 12.0503 14.7345C12.0503 9.39347 9.35944 4.67635 5.25026 1.84649M18 9.45632C18 14.1266 14.1944 17.9126 9.5 17.9126C4.80558 17.9126 1 14.1266 1 9.45632C1 4.78603 4.80558 1 9.5 1C14.1944 1 18 4.78603 18 9.45632Z" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                    </a>
                                    <a href="#">
                                                <span>
                                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.2426 4.82562H14.2496M5.27195 1H13.8159C16.1752 1 18.0878 2.90279 18.0878 5.25V13.75C18.0878 16.0972 16.1752 18 13.8159 18H5.27195C2.91262 18 1 16.0972 1 13.75V5.25C1 2.90279 2.91262 1 5.27195 1ZM12.9615 8.96482C13.0669 9.67223 12.9455 10.3947 12.6144 11.0295C12.2833 11.6643 11.7595 12.179 11.1174 12.5005C10.4753 12.8221 9.74767 12.934 9.03796 12.8204C8.32825 12.7067 7.67263 12.3734 7.16433 11.8677C6.65603 11.362 6.32096 10.7098 6.20675 10.0037C6.09255 9.29764 6.20504 8.57373 6.52823 7.93494C6.85141 7.29615 7.36883 6.775 8.00688 6.44563C8.64494 6.11625 9.37115 5.99542 10.0822 6.10032C10.8075 6.20732 11.479 6.54356 11.9975 7.05938C12.516 7.5752 12.854 8.24324 12.9615 8.96482Z" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                    </a>
                                </div>
                            </div>
                            <div class="postbox-details-author mt-30">
                                <div class="sidebar-widget-author d-flex align-items-start">
                                    <div class="sidebar-widget-author-img">
                                        @if($blog->author_image)
                                            <img src="{{ asset('storage/' . $blog->author_image) }}" alt="{{ $blog->author_name }}">
                                        @else
                                            <img src="{{asset('front/assets/img/blog/blog-standard/blog-av-1.jpg')}}" alt="">
                                        @endif
                                    </div>
                                    <div class="postbox-details-content">
                                        <div class="sidebar-widget-author-content">
                                            <span>About Author</span>
                                            <h4 class="sidebar-widget-author-name">{{ $blog->author_name ?? 'Admin' }}</h4>
                                            <p>
                                                {{ $blog->author_role ?? '' }}
                                            </p>
                                        </div>
                                        <div class="sidebar-widget-author-social">
                                            <a href="#">
                                                        <span>
                                                            <svg width="18" height="17" viewBox="0 0 11 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.77219 6.41667C1.13333 6.41667 1 6.54137 1 7.13889V8.22222C1 8.81974 1.13333 8.94444 1.77219 8.94444H3.31657V13.2778C3.31657 13.8753 3.4499 14 4.08876 14H5.63314C6.272 14 6.40533 13.8753 6.40533 13.2778V8.94444H8.13944C8.62396 8.94444 8.74881 8.85636 8.88192 8.42063L9.21286 7.3373C9.44088 6.59088 9.30037 6.41667 8.47038 6.41667H6.40533V4.61111C6.40533 4.21224 6.75106 3.88889 7.17752 3.88889H9.3753C10.0142 3.88889 10.1475 3.76419 10.1475 3.16667V1.72222C10.1475 1.1247 10.0142 1 9.3753 1H7.17752C5.04518 1 3.31657 2.61675 3.31657 4.61111V6.41667H1.77219Z" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round" />
                                                            </svg>
                                                        </span>
                                            </a>
                                            <a href="#">
                                                        <span>
                                                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.67227 0H0L6.72535 8.79151L0.430223 16.1665H3.33876L8.09997 10.5886L12.3277 16.1153H18L11.0793 7.06826L11.0915 7.08386L17.0504 0.102701H14.1418L9.71667 5.28701L5.67227 0ZM3.131 1.53968H4.89685L14.869 14.5755H13.1032L3.131 1.53968Z" fill="currentcolor" />
                                                            </svg>
                                                        </span>
                                            </a>
                                            <a href="#">
                                                        <span>
                                                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M17.9994 10.5256C17.2116 10.3786 16.4014 10.302 15.5746 10.302C11.025 10.302 6.97863 12.6212 4.39943 16.2214M15.45 3.53634C12.79 6.63763 8.79271 8.61014 4.32318 8.61014C3.17971 8.61014 2.06716 8.48103 1 8.23695M11.7254 17.9135C11.9384 16.8869 12.0503 15.8237 12.0503 14.7345C12.0503 9.39347 9.35944 4.67635 5.25026 1.84649M18 9.45632C18 14.1266 14.1944 17.9126 9.5 17.9126C4.80558 17.9126 1 14.1266 1 9.45632C1 4.78603 4.80558 1 9.5 1C14.1944 1 18 4.78603 18 9.45632Z" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round" />
                                                            </svg>
                                                        </span>
                                            </a>
                                            <a href="#">
                                                        <span>
                                                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M14.2426 4.82562H14.2496M5.27195 1H13.8159C16.1752 1 18.0878 2.90279 18.0878 5.25V13.75C18.0878 16.0972 16.1752 18 13.8159 18H5.27195C2.91262 18 1 16.0972 1 13.75V5.25C1 2.90279 2.91262 1 5.27195 1ZM12.9615 8.96482C13.0669 9.67223 12.9455 10.3947 12.6144 11.0295C12.2833 11.6643 11.7595 12.179 11.1174 12.5005C10.4753 12.8221 9.74767 12.934 9.03796 12.8204C8.32825 12.7067 7.67263 12.3734 7.16433 11.8677C6.65603 11.362 6.32096 10.7098 6.20675 10.0037C6.09255 9.29764 6.20504 8.57373 6.52823 7.93494C6.85141 7.29615 7.36883 6.775 8.00688 6.44563C8.64494 6.11625 9.37115 5.99542 10.0822 6.10032C10.8075 6.20732 11.479 6.54356 11.9975 7.05938C12.516 7.5752 12.854 8.24324 12.9615 8.96482Z" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>
            @if($relatedBlogs->count() > 0)
            <div class="container container-1750">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <a href="{{ route('blog.show', $relatedBlogs->first()->id) }}">
                            <div class="postbox-details-nevigation-wrap p-relative">
                                <div class="postbox-details-nevigation-thumb-bg">
                                    <div class="postbox-details-nevigation-thumb">
                                        <img data-speed=".8" src="{{ $relatedBlogs->first()->getImageUrl() }}" alt="{{ $relatedBlogs->first()->getTranslatedTitle() }}">
                                    </div>
                                </div>
                                <div class="postbox-details-nevigation-content">
                                    <span>Next Post</span>
                                    <h4 class="postbox-details-nevigation-title">{!! nl2br(e($relatedBlogs->first()->getTranslatedTitle())) !!}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endif
           
        </section>
        <!-- postbox area end -->

    </main>
@endsection
