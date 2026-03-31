<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>استثمار المستقبل | ملتقى الأوقاف بالمدينة المنورة</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
</head>
<body class="bg-slate-50 text-base-text font-sans antialiased overflow-x-hidden relative">
    
    <div id="floatingConsultBtn" class="fixed bottom-6 left-4 sm:left-6 z-[100] transition-all duration-500">
        <button onclick="scrollToForm()" class="bg-gradient-to-r from-danger-500 to-danger-700 text-white flex items-center justify-center gap-2.5 px-6 py-3.5 sm:py-4 rounded-full shadow-[0_8px_20px_-4px_rgba(232,73,60,0.6)] hover:from-danger-400 hover:to-danger-600 hover:-translate-y-1 active:scale-95 transition-all duration-300 border border-white/20 group font-bold">
            <svg class="w-5 h-5 sm:w-6 sm:h-6 animate-bounce drop-shadow-md shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
            <span class="text-xs sm:text-sm font-black drop-shadow-md tracking-wide">احجز استشارتك المجانية</span>
        </button>
    </div>

    <header class="relative bg-primary-500 text-white overflow-hidden pb-12 pt-6 rounded-b-[40px] shadow-lg">
        <div class="absolute inset-0 opacity-10" style="background-image: url('{{ asset('images/patterns.svg') }}'); background-size: cover; background-position: center;"></div>
        
        <div class="relative z-10 max-w-md mx-auto px-5 flex flex-col items-center text-center">
            
            <div class="flex flex-nowrap items-center justify-between gap-3 md:gap-6 mb-8 w-full bg-white px-3 py-4 md:p-5 rounded-[24px] shadow-xl border border-slate-100 relative mt-4">
                <img src="{{ asset('images/logo.svg') }}" alt="استثمار المستقبل" class="flex-1 h-14 md:h-14 object-contain min-w-0">
                <div class="w-px h-10 md:h-12 bg-slate-200 shrink-0"></div>
                <img src="{{ asset('images/forum-logo.svg') }}" alt="ملتقى الأوقاف" class="flex-1 h-20 md:h-16 object-contain min-w-0">
            </div>

            <div class="mb-8 text-center px-4">
                <h1 class="text-3xl md:text-4xl font-black text-white mb-2 tracking-tight leading-tight">
                    ملتقى الأوقاف لعام 1447هـ
                </h1>
                
                <p class="text-white/80 text-sm md:text-base mb-4">تحت شعار</p>
                
                <div class="flex flex-col items-center">
                    <div class="inline-block relative">
                        <div class="text-secondary-500 text-lg md:text-xl font-bold border-y-2 border-secondary-500/20 py-2 px-6 md:px-8">
                            الواقفون الجُدد والمصارف المُبتكرة
                        </div>
                    </div>
                </div>
            </div>            
            <div class="bg-white/5 backdrop-blur-md border border-white/20 rounded-2xl p-6 w-full shadow-md mb-8 relative">
                <img src="{{ asset('images/emir_of_madina.png') }}" alt="أمير منطقة المدينة المنورة" class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-secondary-500 shadow-lg object-cover bg-white">
                <p class="text-sm font-medium text-white/80 mb-2">برعاية كريمة وتشريف</p>
                <h2 class="text-lg md:text-xl font-bold text-white mb-1">صاحب السمو الملكي الأمير</h2>
                <h3 class="text-xl md:text-2xl font-extrabold text-secondary-500 mb-2 leading-tight">سلمان بن سلطان بن عبد العزيز آل سعود</h3>
                <p class="text-sm text-white/80">أمير منطقة المدينة المنورة</p>
            </div>

            <p class="text-[15px] leading-relaxed text-white mb-8 px-2">
                تُشارك منظومة استثمار المستقبل القابضة في ملتقى الأوقاف <span class="text-secondary-500 font-bold">كراعي ماسي</span> بصحبة نخبة من مستشاريها، لتقديم خدمات استشارية مجانية خاصة بزوار جناحها في الملتقى
            </p>

            <div class="flex flex-col gap-3 w-full">
                <div class="flex items-center gap-4 bg-primary-600 p-4 rounded-xl border border-white/10 text-right">
                    <div class="w-12 h-12 rounded-full bg-tertiary-500/20 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-secondary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-white mb-1">الأربعاء - الخميس</p>
                        <p class="text-xs text-white/70">( 13 - 14 ) شوال 1447هــ ، (01 - 02) أبريل 2026م</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 bg-primary-600 p-4 rounded-xl border border-white/10 text-right">
                    <div class="w-12 h-12 rounded-full bg-tertiary-500/20 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-secondary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-white/70 mb-1">مقر إقامة الملتقى</p>
                        <p class="text-sm font-bold text-white">غرفة المدينة المنورة</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="px-5 py-12 flex flex-col items-center max-w-md mx-auto z-20 relative">
        <div class="text-center mb-10 w-full">
            <h2 class="text-2xl font-bold text-primary-500 mb-3">
                شركة استثمار المستقبل
            </h2>
            <div class="w-16 h-1 bg-secondary-500 mx-auto rounded-full mb-4"></div>
            <p class="text-[var(--color-base-text)] font-medium text-lg leading-relaxed">
                تُعنى في تمكين قطاع الأوقاف والوصايا
                <br>
                مُنذ أكثر من 
                <span class="text-primary-500 font-extrabold text-2xl mx-1">20</span> 
                عامًا
            </p>
        </div>

        <div class="w-full mb-12" id="bookingSection">
            <button id="toggleFormBtn" class="w-full flex justify-center items-center gap-3 bg-secondary-500 hover:bg-secondary-600 text-primary-500 font-bold text-lg py-5 px-6 rounded-2xl shadow-lg shadow-secondary-500/30 transition-all mb-4 outline-none">
                <svg class="w-6 h-6 text-primary-500 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                <span class="pointer-events-none">احجز استشارتك المجانية</span>
            </button>

            <div id="formContainer" class="bg-white rounded-[24px] shadow-xl shadow-primary-500/5 p-6 md:p-8 w-full border border-accent-500/20 relative overflow-hidden h-0 opacity-0 transition-all duration-500">
                <div class="absolute inset-0 opacity-5 pointer-events-none" style="background-image: url('{{ asset('images/patterns.svg') }}'); background-size: cover;"></div>
                
                <div class="relative z-10 text-center mb-6">
                    <h3 class="text-xl font-bold text-primary-500 mb-2">
                        سجل معلوماتك للتواصل
                    </h3>
                    <p class="text-[14px] text-[var(--color-base-text)] leading-relaxed mb-4">
                        مع خبراء استثمار المستقبل المتخصصين في قطاع الأوقاف والوصايا.
                    </p>
                </div>

                <form class="space-y-4 relative z-10" id="bookingForm" data-page-type="استشارة-ملتقى" onsubmit="handleFormSubmit(event)">
                    <div>
                        <label class="block text-sm font-bold text-primary-500 mb-1">الاسم <span class="text-danger-500">*</span></label>
                        <input type="text" name="name" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-success-500/50 focus:border-success-500 outline-none transition-all" placeholder="الاسم الكريم">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-bold text-primary-500 mb-1">رقم الجوال <span class="text-danger-500">*</span></label>
                        <input type="tel" name="phone" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-success-500/50 focus:border-success-500 outline-none transition-all text-right" placeholder="05xxxxxxxx" dir="ltr">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-primary-500 mb-1">الاستشارة <span class="text-accent-500 font-normal text-xs">(اختياري)</span></label>
                        <select name="service" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-success-500/50 focus:border-success-500 outline-none transition-all">
                            <option value="">اختر الاستشارة المطلوبة</option>
                            <option value="استشارات الحوكمة">استشارات الحوكمة</option>
                            <option value="استشارات شرعية وقانونية">استشارات شرعية وقانونية</option>
                            <option value="استشارات التقنية">استشارات التقنية</option>
                            <option value="استشارات إدارة وتشغيل الأوقاف">استشارات إدارة وتشغيل الأوقاف</option>
                            <option value="استشارات العلاقات والتسويق">استشارات العلاقات والتسويق</option>
                            <option value="استشارات التسويق والإعلام">استشارات التسويق والإعلام</option>
                        </select>
                    </div>  

                    <div>
                        <label class="block text-sm font-bold text-primary-500 mb-1">اكتب ملاحظة <span class="text-accent-500 font-normal text-xs">(اختياري)</span></label>
                        <textarea name="notes" rows="3" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-success-500/50 focus:border-success-500 outline-none transition-all resize-none" placeholder="نبذة عن متطلباتك..."></textarea>
                    </div>

                    <div class="pt-3">
                        <button type="submit" class="submit-button w-full flex justify-center items-center gap-2 bg-primary-500 hover:bg-primary-600 text-white font-bold text-lg py-4 rounded-xl shadow-lg transition-all">
                            إرسال الطلب
                        </button>
                    </div>
                </form>
            </div>
        </div>


        <div class="mb-8 w-full text-center" id="consultantsSection">
            <h3 class="text-xl font-bold text-primary-500 mb-6 inline-block relative">
                تعرّف على فريق منظومة استثمار المستقبل المُشارك
                <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-12 h-1 bg-secondary-500 rounded-full"></span>
            </h3>
            
            @php
                $consultants = config('consultants', []);
            @endphp

            @if(!empty($consultants))
            <div id="consultantsMarqueeContainer" class="relative overflow-hidden w-full mt-8 py-2" dir="rtl">
                <div class="absolute inset-y-0 right-0 w-12 bg-gradient-to-l from-slate-50 to-transparent z-10 pointer-events-none"></div>
                <div class="absolute inset-y-0 left-0 w-12 bg-gradient-to-r from-slate-50 to-transparent z-10 pointer-events-none"></div>
                
                <div class="flex w-max items-stretch animate-marquee-rtl gap-4 px-4 hover:[animation-play-state:paused]">
                    @for($i = 0; $i < 2; $i++)
                        @foreach($consultants as $consultant)
                        <div onclick="openConsultantModal('{{ $consultant['name'] }}', '{{ $consultant['title'] }}', '{{ $consultant['bio'] ?? '' }}', '{{ !empty($consultant['image']) && file_exists(public_path('images/consultants/' . $consultant['image'])) ? asset('images/consultants/' . $consultant['image']) : '' }}')" 
                             class="bg-white rounded-2xl p-4 shadow-sm border border-accent-500/20 flex flex-col items-center justify-start w-50 shrink-0 h-full cursor-pointer hover:border-secondary-500/50 transition-colors group">
                            <div class="w-16 h-16 rounded-full bg-slate-100 mb-3 border-2 border-tertiary-500/30 flex items-center justify-center overflow-hidden shrink-0 group-hover:scale-105 transition-transform">
                                @if(!empty($consultant['image']) && file_exists(public_path('images/consultants/' . $consultant['image'])))
                                    <img src="{{ asset('images/consultants/' . $consultant['image']) }}" alt="{{ $consultant['name'] }}" class="w-full h-full object-cover">
                                @else
                                    <svg class="w-8 h-8 text-accent-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                @endif
                            </div>
                            <h4 class="text-sm font-bold text-primary-500 mb-1 text-center whitespace-normal mt-auto">{{ $consultant['name'] }}</h4>
                            <p class="text-xs text-success-500 font-bold text-center whitespace-normal">{{ $consultant['title'] }}</p>
                        </div>
                        @endforeach
                    @endfor
                </div>
            </div>

            <div id="consultantsGridContainer" style="display: none;" class="grid-cols-2 lg:grid-cols-3 gap-4 mt-8 opacity-0 transition-opacity duration-500">
                @foreach($consultants as $consultant)
                <div onclick="openConsultantModal('{{ $consultant['name'] }}', '{{ $consultant['title'] }}', '{{ $consultant['bio'] ?? '' }}', '{{ !empty($consultant['image']) && file_exists(public_path('images/consultants/' . $consultant['image'])) ? asset('images/consultants/' . $consultant['image']) : '' }}')"
                     class="bg-white rounded-2xl p-4 shadow-sm border border-accent-500/20 flex flex-col items-center justify-start h-full cursor-pointer hover:border-secondary-500/50 transition-colors group">
                    <div class="w-16 h-16 rounded-full bg-slate-100 mb-3 border-2 border-tertiary-500/30 flex items-center justify-center overflow-hidden shrink-0 group-hover:scale-105 transition-transform">
                        @if(!empty($consultant['image']) && file_exists(public_path('images/consultants/' . $consultant['image'])))
                            <img src="{{ asset('images/consultants/' . $consultant['image']) }}" alt="{{ $consultant['name'] }}" class="w-full h-full object-cover">
                        @else
                            <svg class="w-8 h-8 text-accent-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        @endif
                    </div>
                    <h4 class="text-sm font-bold text-primary-500 mb-1 text-center mt-auto">{{ $consultant['name'] }}</h4>
                    <p class="text-xs text-success-500 font-bold text-center">{{ $consultant['title'] }}</p>
                </div>
                @endforeach
            </div>

            <button id="toggleConsultantsBtn" class="mt-6 inline-flex items-center gap-2 text-primary-500 font-bold text-sm bg-primary-500/10 hover:bg-primary-500/20 px-5 py-2.5 rounded-full transition-all duration-300 outline-none">
                <span>عرض جميع المستشارين</span>
                <svg class="w-4 h-4 transition-transform duration-300 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            @endif
        </div>
        
        <div class="w-full text-center mt-6">
            <h3 class="text-lg font-bold text-primary-500 mb-6 relative inline-block">
                الشركات التابعة
                <span class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-8 h-1 bg-secondary-500 rounded-full"></span>
            </h3>
            
            <div class="grid grid-cols-2 gap-4 w-full">
                <div class="bg-white rounded-[20px] shadow-sm border border-slate-100 p-4 flex items-center justify-center h-24 transition-all hover:border-secondary-500/50 hover:shadow-md group">
                    <img src="{{ asset('images/logos/faradah.svg') }}" alt="فرادة" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="bg-white rounded-[20px] shadow-sm border border-slate-100 p-4 flex items-center justify-center h-24 transition-all hover:border-secondary-500/50 hover:shadow-md group">
                    <img src="{{ asset('images/logos/sna.svg') }}" alt="سنا" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="bg-white rounded-[20px] shadow-sm border border-slate-100 p-4 flex items-center justify-center h-24 transition-all hover:border-secondary-500/50 hover:shadow-md group">
                    <img src="{{ asset('images/logos/majales.svg') }}" alt="مجالس" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="bg-white rounded-[20px] shadow-sm border border-slate-100 p-4 flex items-center justify-center h-24 transition-all hover:border-secondary-500/50 hover:shadow-md group">
                    <img src="{{ asset('images/logos/iwqf.svg') }}" alt="مؤسسة اي-وقف" class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300">
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-primary-500 text-white pt-12 pb-10 px-6 text-center rounded-t-[40px] mt-4 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10" style="background-image: url('{{ asset('images/patterns.svg') }}'); background-size: cover; background-position: center;"></div>
        
        <div class="relative z-10 max-w-md mx-auto">
            <img src="{{ asset('images/logo-white.svg') }}" alt="استثمار المستقبل" class="h-12 mx-auto mb-6">
            
            <h3 class="text-xl font-bold mb-6 text-secondary-500">تواصـــل معنا</h3>
            
            <div class="flex flex-wrap justify-center items-center gap-4 mb-8">
                <a href="https://wa.me/966920008373?text=*%D8%A3%D8%B1%D8%BA%D8%A8%20%D8%A8%D8%AD%D8%AC%D8%B2%20%D9%85%D9%88%D8%B9%D8%AF%20%D8%A7%D8%B3%D8%AA%D8%B4%D8%A7%D8%B1%D8%A9%20%D9%85%D8%AC%D8%A7%D9%86%D9%8A%D8%A9%20%D9%85%D8%B9%20%D9%81%D8%B1%D9%8A%D9%82%20%D8%A7%D8%B3%D8%AA%D8%AB%D9%85%D8%A7%D8%B1%20%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D9%82%D8%A8%D9%84*%0A%0A%D8%A7%D9%84%D8%A7%D8%B3%D9%85%3A" target="_blank" class="w-12 h-12 rounded-full bg-success-500 text-white flex items-center justify-center hover:bg-white hover:text-success-500 transition-all transform hover:scale-110 shadow-lg">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.298-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.347-.272.298-1.04 1.016-1.04 2.479 0 1.462 1.065 2.876 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                </a>
                
                <a href="mailto:cm@estithmar.org.sa" class="w-12 h-12 rounded-full bg-white/10 text-white flex items-center justify-center hover:bg-tertiary-500 transition-all transform hover:scale-110">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </a>
                
                <a href="https://x.com/estithmarorg" class="w-12 h-12 rounded-full bg-white/10 text-white flex items-center justify-center hover:bg-tertiary-500 transition-all transform hover:scale-110">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                
                <a href="https://www.linkedin.com/company/estithmarorg/" class="w-12 h-12 rounded-full bg-white/10 text-white flex items-center justify-center hover:bg-tertiary-500 transition-all transform hover:scale-110">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
            </div>
            
            <p class="text-[13px] text-accent-500 font-medium mt-6">© {{ date('Y') }} شركة استثمار المستقبل. جميع الحقوق محفوظة.</p>
        </div>
    </footer>
    
    <div id="consultantModal" class="fixed inset-0 z-[2000] flex items-center justify-center px-6 opacity-0 pointer-events-none transition-all duration-300">
        <div class="absolute inset-0 bg-primary-500/60 backdrop-blur-md" onclick="closeConsultantModal()"></div>
        
        <div class="relative bg-white w-full max-w-sm rounded-[32px] overflow-hidden shadow-2xl transform scale-90 transition-all duration-300">
            <div class="absolute inset-x-0 top-0 h-32 opacity-10 bg-primary-500" style="background-image: url('{{ asset('images/patterns.svg') }}'); background-size: cover; background-position: center;"></div>
            
            <div class="relative p-8 pt-12 flex flex-col items-center text-center">
                <button onclick="closeConsultantModal()" class="absolute top-4 right-4 w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-slate-200 transition-colors">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <div id="modalImageContainer" class="w-24 h-24 rounded-full bg-slate-100 mb-4 border-4 border-white shadow-lg flex items-center justify-center overflow-hidden shrink-0 relative z-10">
                </div>

                <h3 id="modalName" class="text-xl font-bold text-primary-500 mb-1"></h3>
                <p id="modalTitle" class="text-sm font-bold text-success-500 mb-4"></p>
                
                <div class="w-12 h-1 bg-secondary-500 rounded-full mb-6"></div>
                
                <p id="modalBio" class="text-[15px] leading-relaxed text-slate-600 mb-8"></p>

                <button onclick="closeConsultantModal()" class="w-full bg-primary-500 hover:bg-primary-600 text-white font-bold py-4 rounded-2xl transition-all shadow-lg active:scale-95">
                    إغلاق التعريف
                </button>
            </div>
        </div>
    </div>

    <style>
        #formContainer {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        #formContainer.expanded {
            height: auto;
            opacity: 1;
            padding: 2rem;
            margin-bottom: 2rem;
        }
        .toast-container {
            position: fixed;
            bottom: 24px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            gap: 8px;
            z-index: 1000;
        }
        .toast {
            background-color: #00b48d;
            color: white;
            padding: 12px 20px;
            border-radius: 12px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 14px;
            font-weight: 600;
            opacity: 0;
            transform: translateY(100%) scale(0.9);
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        .toast.show {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
        .toast-icon {
            font-size: 18px;
        }

        @keyframes marquee-rtl {
            0% { transform: translateX(0); }
            100% { transform: translateX(50%); }
        }
        .animate-marquee-rtl {
            animation: marquee-rtl 25s linear infinite;
        }
    </style>

    <script>
        // دالة التمرير وفتح النموذج المرتبطة بالشريط العلوي الثابت
        function scrollToForm() {
            const toggleBtn = document.getElementById('toggleFormBtn');
            const formContainer = document.getElementById('formContainer');
            const bookingSection = document.getElementById('bookingSection');

            if (toggleBtn && formContainer && bookingSection) {
                // افتح النموذج إذا كان مغلقاً
                if (!formContainer.classList.contains('expanded')) {
                    toggleBtn.click();
                }

                // التمرير بحساب المسافة المطلوبة مع تجنب تغطية الشريط للعنوان
                setTimeout(() => {
                    const yOffset = -70; // مسافة لإبعاد الشريط العلوي الثابت
                    const y = bookingSection.getBoundingClientRect().top + window.pageYOffset + yOffset;
                    
                    window.scrollTo({
                        top: y,
                        behavior: 'smooth'
                    });
                }, 300); // تأخير بسيط جداً للسماح للأنيميشن بالبدء
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Floating Button Scroll Logic
            const floatingBtn = document.getElementById('floatingConsultBtn');
            const bookingSection = document.getElementById('bookingSection');
            
            if (floatingBtn && bookingSection) {
                window.addEventListener('scroll', () => {
                    const bookingRect = bookingSection.getBoundingClientRect();
                    // If the user scrolls close to the booking section, hide the button
                    if (bookingRect.top <= window.innerHeight * 0.8) {
                        floatingBtn.style.transform = 'translateY(150px)';
                        floatingBtn.style.opacity = '0';
                        floatingBtn.style.pointerEvents = 'none';
                    } else {
                        floatingBtn.style.transform = 'translateY(0)';
                        floatingBtn.style.opacity = '1';
                        floatingBtn.style.pointerEvents = 'auto';
                    }
                });
            }

            // Expandable Form Logic
            const toggleBtn = document.getElementById('toggleFormBtn');
            const formContainer = document.getElementById('formContainer');

            if (toggleBtn && formContainer) {
                toggleBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    toggleBtn.classList.toggle('active');
                    formContainer.classList.toggle('expanded');
                    
                    const span = toggleBtn.querySelector('span');
                    if (formContainer.classList.contains('expanded')) {
                        span.textContent = 'إخفاء نموذج الحجز';
                    } else {
                        span.textContent = 'احجز استشارتك المجانية';
                    }
                });
            }

            // Consultants Toggle Logic
            const toggleConsultantsBtn = document.getElementById('toggleConsultantsBtn');
            const consultantsMarqueeContainer = document.getElementById('consultantsMarqueeContainer');
            const consultantsGridContainer = document.getElementById('consultantsGridContainer');

            if (toggleConsultantsBtn && consultantsMarqueeContainer && consultantsGridContainer) {
                let isConsultantsOpen = false;
                toggleConsultantsBtn.addEventListener('click', () => {
                    isConsultantsOpen = !isConsultantsOpen;
                    const span = toggleConsultantsBtn.querySelector('span');
                    const svg = toggleConsultantsBtn.querySelector('svg');
                    
                    if (isConsultantsOpen) {
                        consultantsMarqueeContainer.style.display = 'none';
                        consultantsGridContainer.style.display = 'grid';
                        setTimeout(() => {
                            consultantsGridContainer.classList.remove('opacity-0');
                            consultantsGridContainer.classList.add('opacity-100');
                        }, 50);
                        
                        span.textContent = 'إخفاء القائمة';
                        svg.classList.add('rotate-180');
                    } else {
                        consultantsGridContainer.classList.remove('opacity-100');
                        consultantsGridContainer.classList.add('opacity-0');
                        
                        setTimeout(() => {
                            consultantsGridContainer.style.display = 'none';
                            consultantsMarqueeContainer.style.display = 'block';
                        }, 500);
                        
                        span.textContent = 'عرض جميع المستشارين';
                        svg.classList.remove('rotate-180');
                    }
                });
            }
        });

        // Consultant Modal Functions
        function openConsultantModal(name, title, bio, imageSrc) {
            const modal = document.getElementById('consultantModal');
            const modalContent = modal.querySelector('div:last-child');
            const modalImageContainer = document.getElementById('modalImageContainer');
            
            document.getElementById('modalName').innerText = name;
            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalBio').innerText = bio || 'لا يوجد ملخص تعريفي حالياً.';
            
            if (imageSrc) {
                modalImageContainer.innerHTML = `<img src="${imageSrc}" alt="${name}" class="w-full h-full object-cover">`;
            } else {
                modalImageContainer.innerHTML = `
                    <svg class="w-12 h-12 text-accent-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>`;
            }

            modal.classList.remove('opacity-0', 'pointer-events-none');
            modalContent.classList.remove('scale-90');
            modalContent.classList.add('scale-100');
            document.body.style.overflow = 'hidden';
        }

        function closeConsultantModal() {
            const modal = document.getElementById('consultantModal');
            const modalContent = modal.querySelector('div:last-child');
            
            modal.classList.add('opacity-0', 'pointer-events-none');
            modalContent.classList.remove('scale-100');
            modalContent.classList.add('scale-90');
            document.body.style.overflow = '';
        }

        // Device Detection Functions
        function getDeviceType() {
            const ua = navigator.userAgent;
            if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) {
                return 'Tablet';
            }
            if (/Mobile|Android|iP(hone|od)|IEMobile|BlackBerry|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(ua)) {
                return 'Mobile';
            }
            return 'Desktop';
        }

        function getBrowserInfo() {
            const ua = navigator.userAgent;
            let browserName = 'Unknown';
            let browserVersion = 'Unknown';

            if (ua.indexOf('Firefox') > -1) {
                browserName = 'Firefox';
                browserVersion = ua.match(/Firefox\/([0-9.]+)/)?.[1] || 'Unknown';
            } else if (ua.indexOf('SamsungBrowser') > -1) {
                browserName = 'Samsung Browser';
                browserVersion = ua.match(/SamsungBrowser\/([0-9.]+)/)?.[1] || 'Unknown';
            } else if (ua.indexOf('Opera') > -1 || ua.indexOf('OPR') > -1) {
                browserName = 'Opera';
                browserVersion = ua.match(/(?:Opera|OPR)\/([0-9.]+)/)?.[1] || 'Unknown';
            } else if (ua.indexOf('Trident') > -1) {
                browserName = 'Internet Explorer';
                browserVersion = ua.match(/rv:([0-9.]+)/)?.[1] || 'Unknown';
            } else if (ua.indexOf('Edge') > -1) {
                browserName = 'Edge (Legacy)';
                browserVersion = ua.match(/Edge\/([0-9.]+)/)?.[1] || 'Unknown';
            } else if (ua.indexOf('Edg') > -1) {
                browserName = 'Edge (Chromium)';
                browserVersion = ua.match(/Edg\/([0-9.]+)/)?.[1] || 'Unknown';
            } else if (ua.indexOf('Chrome') > -1) {
                browserName = 'Chrome';
                browserVersion = ua.match(/Chrome\/([0-9.]+)/)?.[1] || 'Unknown';
            } else if (ua.indexOf('Safari') > -1) {
                browserName = 'Safari';
                browserVersion = ua.match(/Version\/([0-9.]+)/)?.[1] || 'Unknown';
            }

            return `${browserName} ${browserVersion}`;
        }

        function getOSInfo() {
            const ua = navigator.userAgent;
            let os = 'Unknown';

            if (ua.indexOf('Android') > -1) os = 'Android';
            else if (ua.indexOf('like Mac') > -1) os = 'iOS';
            else if (ua.indexOf('Win') > -1) os = 'Windows';
            else if (ua.indexOf('Mac') > -1) os = 'macOS';
            else if (ua.indexOf('Linux') > -1) os = 'Linux';

            return os;
        }

        // Form Submission Handler
        function handleFormSubmit(e) {
            e.preventDefault();

            const SCRIPT_URL = 'https://script.google.com/macros/s/AKfycbxbZyMuoZ_xSuW3HH8-wjjD3XPywJDRPTKDfd6lIecIWpVsKVQygk1CmmCYskRsJr5qqA/exec';

            const form = e.target;
            const submitBtn = form.querySelector('.submit-button');
            const originalBtnText = submitBtn.innerText;
            const formData = new FormData(form);

            const pageType = form.dataset.pageType || 'غير محدد';

            submitBtn.disabled = true;
            submitBtn.innerText = 'جاري الإرسال...';
            submitBtn.style.opacity = '0.7';

            const data = new URLSearchParams();
            data.append('name', formData.get('name') || '');
            data.append('phone', formData.get('phone') || '');
            data.append('company', formData.get('company') || '');
            data.append('service', formData.get('service') || '');
            data.append('notes', formData.get('notes') || '');

            data.append('pageType', pageType);
            data.append('deviceType', getDeviceType());
            data.append('browser', getBrowserInfo());
            data.append('os', getOSInfo());
            data.append('screenSize', `${window.screen.width}x${window.screen.height}`);
            data.append('viewportSize', `${window.innerWidth}x${window.innerHeight}`);
            data.append('timestamp', new Date().toISOString());
            data.append('timezone', Intl.DateTimeFormat().resolvedOptions().timeZone);
            data.append('language', navigator.language);

            const formDataBackup = {
                name: formData.get('name'),
                phone: formData.get('phone'),
                company: formData.get('company'),
                service: formData.get('service'),
                notes: formData.get('notes'),
            };

            let requestFailed = false;

            setTimeout(() => {
                if (!requestFailed) {
                    showToast('شكراً لك! تم استلام طلبك وسنتواصل معك قريباً.');
                    form.reset();
                    
                    const toggleBtn = document.getElementById('toggleFormBtn');
                    const formContainer = document.getElementById('formContainer');
                    if(toggleBtn && formContainer) {
                        toggleBtn.classList.remove('active');
                        formContainer.classList.remove('expanded');
                        toggleBtn.querySelector('span').textContent = 'احجز استشارتك المجانية';
                    }

                    submitBtn.disabled = false;
                    submitBtn.innerText = originalBtnText;
                    submitBtn.style.opacity = '1';
                }
            }, 500);

            fetch(SCRIPT_URL, {
                method: 'POST',
                mode: 'no-cors',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: data
            })
            .then(() => {
                console.log('Form submitted successfully');
            })
            .catch(error => {
                requestFailed = true;
                console.error('Submission error:', error);

                if(form.querySelector('[name="name"]')) form.querySelector('[name="name"]').value = formDataBackup.name;
                if(form.querySelector('[name="phone"]')) form.querySelector('[name="phone"]').value = formDataBackup.phone;
                if(form.querySelector('[name="company"]')) form.querySelector('[name="company"]').value = formDataBackup.company;
                if(form.querySelector('[name="service"]')) form.querySelector('[name="service"]').value = formDataBackup.service;
                if(form.querySelector('[name="notes"]')) form.querySelector('[name="notes"]').value = formDataBackup.notes;

                showToast('حدث خطأ في الإرسال. يرجى المحاولة مرة أخرى.');
                
                const toggleBtn = document.getElementById('toggleFormBtn');
                const formContainer = document.getElementById('formContainer');
                if(toggleBtn && formContainer) {
                    toggleBtn.classList.add('active');
                    formContainer.classList.add('expanded');
                    toggleBtn.querySelector('span').textContent = 'إخفاء نموذج الحجز';
                }

                submitBtn.disabled = false;
                submitBtn.innerText = originalBtnText;
                submitBtn.style.opacity = '1';
            });
        }

        function showToast(message) {
            let container = document.querySelector('.toast-container');
            if (!container) {
                container = document.createElement('div');
                container.className = 'toast-container';
                document.body.appendChild(container);
            }

            const toast = document.createElement('div');
            toast.className = 'toast';
            toast.innerHTML = `
                <span class="toast-icon">✅</span>
                <span>${message}</span>
            `;

            container.appendChild(toast);

            requestAnimationFrame(() => {
                toast.classList.add('show');
            });

            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => {
                    toast.remove();
                }, 400);
            }, 3000);
        }
    </script>
</body>
</html>