<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="{{route('adminHome')}}">
            <img src="{{($setting->logo) ?? asset('assets/site/img/logo.png')}}" class="header-brand-img light-logo1" alt="logo">
        </a>
        <!-- LOGO -->
    </div>
    <ul class="side-menu">
        <li><h3>العناصر</h3></li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('adminHome')}}">
                <i class="icon icon-home side-menu__icon"></i>
                <span class="side-menu__label">الرئيسية</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('admins.index')}}">
                <i class="fe fe-users side-menu__icon"></i>
                <span class="side-menu__label">المشرفين</span>
            </a>
        </li>


        <li class="slide">
            <a class="side-menu__item" href="{{route('admins.index')}}">
                <i class="fe fe-align-justify side-menu__icon"></i>
                <span class="side-menu__label">التصنيفات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('real_estate.index')}}">
                <i class="fe fe-align-justify side-menu__icon"></i>
                <span class="side-menu__label">العقارات</span>
            </a>
        </li>




        {{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('sliders.index')}}">--}}
{{--                <i class="fe fe-camera side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">البانر المتحرك</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('users.index')}}">--}}
{{--                <i class="fe fe-user-minus side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">المستخدمين</span>--}}
{{--            </a>--}}
{{--        </li>--}}




{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('points.index')}}">--}}
{{--                <i class="fe fe-dollar-sign" aria-hidden="true"></i>--}}
{{--                <span class="side-menu__label">النقاط</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('users.index')}}">--}}
{{--                <i class="fe fe-user-minus side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">المواقع</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('services.index')}}">--}}
{{--                <i class="fe fe-shopping-cart side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">الخدمات</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('aboutUs.index')}}">--}}
{{--                <i class="fe fe-info side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">ماذا عنا</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('allPosts.index')}}">--}}
{{--                <i class="fe fe-at-sign side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">منشورات المستخدمين</span>--}}
{{--            </a>--}}
{{--        </li>--}}


        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.logout')}}">
                <i class="icon icon-lock side-menu__icon"></i>
                <span class="side-menu__label">تسجيل الخروج</span>
            </a>
        </li>

    </ul>
</aside>
