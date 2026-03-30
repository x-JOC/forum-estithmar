<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>استثمار المستقبل | ملتقى الأوقاف بالمدينة المنورة</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased overflow-x-hidden">
    <!-- Header Section -->
    <header class="relative bg-gradient-to-b from-teal-900 to-teal-800 text-white min-h-[500px] flex flex-col items-center justify-center pt-12 pb-20 px-4 rounded-b-[3rem] shadow-2xl overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-yellow-300 via-transparent to-transparent"></div>
        <div class="absolute -right-20 -top-20 w-64 h-64 bg-teal-600 rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>
        <div class="absolute -left-20 top-40 w-72 h-72 bg-yellow-600 rounded-full mix-blend-multiply filter blur-3xl opacity-50"></div>

        <div class="relative z-10 flex flex-col items-center text-center w-full max-w-md mx-auto">
            <!-- Logo Placeholder -->
            <img src="{{ asset('forum-logo.svg') }}" alt="Logo">

            <h1 class="text-2xl md:text-3xl font-bold mb-2 text-yellow-400">
                الواقفون الجُدد والمصارف المُبتكرة
            </h1>
            
            <div class="w-24 h-1 bg-yellow-500 rounded-full mb-8 opacity-80"></div>

            <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 mb-8 w-full shadow-lg relative overflow-hidden">
                <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-yellow-400 to-transparent opacity-20 rounded-bl-full"></div>
                <p class="text-sm font-medium text-teal-100 mb-1">برعاية كريمة وتشريف</p>
                <h2 class="text-lg md:text-xl font-bold text-white mb-1">صاحب السمو الملكي الأمير</h2>
                <h3 class="text-xl md:text-2xl font-extrabold text-yellow-400 mb-2">سلمان بن سلطان بن عبد العزيز آل سعود</h3>
                <p class="text-sm text-teal-100">أمير منطقة المدينة المنورة</p>
            </div>

            <p class="text-base leading-relaxed text-teal-50 mb-8 px-2 font-medium bg-teal-900/50 p-4 rounded-xl border border-teal-700/50 shadow-inner">
                تُشارك استثمار المستقبل في ملتقى الأوقاف <span class="text-yellow-400 font-bold">كراعي ماسي</span> بصحبة نخبة من مستشاريها متواجدون على مدار اليومين في الواجهة الرئيسية للحدث
            </p>

            <div class="flex flex-col gap-4 w-full">
                <!-- Date -->
                <div class="flex items-center gap-4 bg-white/10 p-4 rounded-xl backdrop-blur-sm border border-white/10 text-right hover:bg-white/15 transition duration-300">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-teal-600 to-teal-800 flex items-center justify-center shrink-0 border border-teal-500/30 shadow-md">
                        <svg class="w-5 h-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[11px] text-teal-200 uppercase tracking-wider mb-0.5">التاريخ والأيام</p>
                        <p class="text-sm font-bold text-white">الأربعاء - الخميس</p>
                        <p class="text-xs text-teal-100 mt-0.5">( 13 - 14 ) شوال 1447هــ ، (01 - 02) أبريل 2026م</p>
                    </div>
                </div>

                <!-- Location -->
                <div class="flex items-center gap-4 bg-white/10 p-4 rounded-xl backdrop-blur-sm border border-white/10 text-right hover:bg-white/15 transition duration-300">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-teal-600 to-teal-800 flex items-center justify-center shrink-0 border border-teal-500/30 shadow-md">
                        <svg class="w-5 h-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[11px] text-teal-200 uppercase tracking-wider mb-0.5">مقر إقامة الملتقى</p>
                        <p class="text-sm font-bold text-white">غرفة المدينة المنورة</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Middle Section -->
    <main class="px-4 py-16 flex flex-col items-center z-20 relative max-w-md mx-auto">
        <div class="text-center mb-12 w-full">
            <h2 class="text-3xl font-bold text-teal-900 mb-6 inline-block relative">
                شركة استثمار المستقبل
                <span class="absolute -bottom-3 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-yellow-500 rounded-full"></span>
            </h2>
            <p class="text-slate-600 font-medium text-lg leading-relaxed mt-4">
                تُعنى في تمكين قطاع الأوقاف والوصايا مُنذ أكثر من 
                <span class="inline-flex items-center justify-center bg-teal-50 text-teal-700 font-extrabold text-3xl px-3 py-1 rounded-lg border border-teal-100 mx-1">20</span> 
                عامًا
            </p>
        </div>

        <div class="bg-white rounded-[2rem] shadow-xl shadow-teal-900/10 p-6 md:p-8 w-full mb-16 border border-slate-100/50 relative overflow-hidden transform hover:-translate-y-1 transition duration-500">
            <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-teal-500 via-teal-400 to-yellow-400"></div>
            
            <div class="text-center mb-8 mt-2">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-teal-50 to-white rounded-full mb-6 shadow-sm border border-teal-100">
                    <svg class="w-10 h-10 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-4 leading-snug">
                    احصل على استشارة مجانيّـــة<br>في ملتقى الأوقاف
                </h3>
                <p class="text-[15px] text-slate-600 leading-relaxed mb-2 font-medium px-4">
                    مع خبراء استثمار المستقبل المتخصصين في قطاع الأوقاف والوصايا
                </p>
                <p class="text-[15px] text-teal-700 font-bold bg-teal-50 py-2 px-4 rounded-xl inline-block mt-2">
                    لتحظى بأفضل الحلول الآمنة والمُمكنة على استدامة وقفك.
                </p>
            </div>

            <!-- Booking Form -->
            <form class="space-y-5" action="#" method="POST">
                <div class="group">
                    <label class="block text-sm font-bold text-slate-700 mb-2 group-focus-within:text-teal-600 transition-colors">الاسم <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-slate-400">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                        </div>
                        <input type="text" required class="w-full pr-11 pl-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 focus:bg-white outline-none transition-all" placeholder="الاسم الكريم">
                    </div>
                </div>
                
                <div class="group">
                    <label class="block text-sm font-bold text-slate-700 mb-2 group-focus-within:text-teal-600 transition-colors">رقم الجوال <span class="text-red-500">*</span></label>
                    <div class="relative">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-slate-400">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                        </div>
                        <input type="tel" required class="w-full pr-11 pl-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 focus:bg-white outline-none transition-all text-right" placeholder="05xxxxxxxx" dir="ltr">
                    </div>
                </div>

                <div class="group">
                    <label class="block text-sm font-bold text-slate-700 mb-2 group-focus-within:text-teal-600 transition-colors">الشركة <span class="text-slate-400 font-normal text-xs mr-1">(اختياري)</span></label>
                    <div class="relative">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-slate-400">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                        </div>
                        <input type="text" class="w-full pr-11 pl-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 focus:bg-white outline-none transition-all" placeholder="اسم الشركة أو المؤسسة">
                    </div>
                </div>

                <div class="group">
                    <label class="block text-sm font-bold text-slate-700 mb-2 group-focus-within:text-teal-600 transition-colors">الخدمة <span class="text-slate-400 font-normal text-xs mr-1">(اختياري)</span></label>
                    <div class="relative">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-slate-400">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                        </div>
                        <select class="w-full pr-11 pl-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 focus:bg-white outline-none transition-all appearance-none cursor-pointer">
                            <option value="">اختر الخدمة المطلوبة</option>
                            <option value="1">تأسيس الأوقاف</option>
                            <option value="2">استشارات استثمارية</option>
                            <option value="3">حلول الاستدامة</option>
                            <option value="4">مراجعة ودراسة الوصايا</option>
                        </select>
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-slate-500">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </div>
                    </div>
                </div>

                <div class="group">
                    <label class="block text-sm font-bold text-slate-700 mb-2 group-focus-within:text-teal-600 transition-colors">اكتب ملاحظة <span class="text-slate-400 font-normal text-xs mr-1">(اختياري)</span></label>
                    <textarea rows="3" class="w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 focus:bg-white outline-none transition-all resize-none" placeholder="نبذة عن متطلباتك..."></textarea>
                </div>

                <div class="pt-4">
                    <button type="button" class="group relative w-full flex justify-center items-center gap-3 bg-gradient-to-l from-teal-800 to-teal-600 hover:from-teal-900 hover:to-teal-700 text-white font-bold text-lg py-4 px-6 rounded-xl shadow-lg shadow-teal-700/30 transition-all overflow-hidden">
                        <span class="relative z-10">احجز جلستك الآن</span>
                        <svg class="w-5 h-5 relative z-10 rtl:rotate-180 transform group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                        <div class="absolute inset-0 h-full w-full bg-white/20 scale-x-0 group-hover:scale-x-100 origin-right transition-transform duration-300 ease-out"></div>
                    </button>
                </div>
            </form>
        </div>

        <!-- Consultants Section -->
        <div class="mb-8 w-full">
            <div class="text-center mb-10">
                <h3 class="text-2xl font-bold text-teal-900 mb-3 block">
                    مستشاري استثمار المستقبل
                </h3>
                <p class="text-slate-500">تعرّف على نخبة مستشارينا في الملتقى</p>
                <div class="w-12 h-1 bg-yellow-400 rounded-full mx-auto mt-4"></div>
            </div>
            
            <div class="grid grid-cols-2 gap-4 md:gap-6">
                <!-- Consultant 1 -->
                <div class="bg-white rounded-2xl p-5 shadow-md shadow-slate-200/50 border border-slate-100 flex flex-col items-center hover:shadow-lg transition-shadow">
                    <div class="w-20 h-20 rounded-full bg-gradient-to-b from-slate-100 to-slate-200 mb-4 border-4 border-white shadow-sm flex items-center justify-center overflow-hidden relative">
                        <svg class="w-10 h-10 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h4 class="text-base font-bold text-slate-800 mb-1 text-center">أحمد عبدالله</h4>
                    <p class="text-xs text-teal-600 font-medium text-center bg-teal-50 px-3 py-1 rounded-full">خبير أوقاف</p>
                </div>
                <!-- Consultant 2 -->
                <div class="bg-white rounded-2xl p-5 shadow-md shadow-slate-200/50 border border-slate-100 flex flex-col items-center hover:shadow-lg transition-shadow">
                    <div class="w-20 h-20 rounded-full bg-gradient-to-b from-slate-100 to-slate-200 mb-4 border-4 border-white shadow-sm flex items-center justify-center overflow-hidden relative">
                        <svg class="w-10 h-10 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h4 class="text-base font-bold text-slate-800 mb-1 text-center">عبدالرحمن صالح</h4>
                    <p class="text-xs text-teal-600 font-medium text-center bg-teal-50 px-3 py-1 rounded-full">مستشار استثماري</p>
                </div>
            </div>
            <div class="text-center mt-8">
                <button class="text-sm text-teal-700 font-bold border-2 border-teal-700/20 rounded-full px-8 py-2.5 hover:bg-teal-50 hover:border-teal-700/50 transition-all flex items-center justify-center mx-auto gap-2">
                    عرض المزيد من المستشارين
                </button>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 pt-16 pb-12 px-6 text-center rounded-t-[3rem] mt-8 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(ellipse_at_bottom,_var(--tw-gradient-stops))] from-teal-500 to-transparent"></div>
        <div class="absolute -right-20 -bottom-20 w-64 h-64 bg-teal-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>

        <div class="relative z-10 max-w-md mx-auto">
            <h3 class="text-2xl font-bold text-white mb-8">تواصـــل معنا</h3>
            
            <div class="flex justify-center gap-6 mb-10 text-teal-400">
                <a href="#" class="w-14 h-14 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-teal-600 hover:text-white hover:border-transparent hover:shadow-lg hover:shadow-teal-600/50 transition-all transform hover:-translate-y-1">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                </a>
                <a href="#" class="w-14 h-14 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-teal-600 hover:text-white hover:border-transparent hover:shadow-lg hover:shadow-teal-600/50 transition-all transform hover:-translate-y-1">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
                <a href="#" class="w-14 h-14 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-teal-600 hover:text-white hover:border-transparent hover:shadow-lg hover:shadow-teal-600/50 transition-all transform hover:-translate-y-1">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
            </div>
            
            <div class="h-px w-full bg-gradient-to-r from-transparent via-white/10 to-transparent mb-8"></div>
            
            <p class="text-[13px] text-slate-500 font-medium">© 2026 شركة استثمار المستقبل. جميع الحقوق محفوظة.</p>
        </div>
    </footer>
</body>
</html>
