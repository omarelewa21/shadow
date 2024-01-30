{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />
<x-backpack::menu-item title="Company infos" icon="la la-question" :link="backpack_url('company-info')" />
<x-backpack::menu-item title="Services" icon="la la-question" :link="backpack_url('service')" />
<x-backpack::menu-item title="Team members" icon="la la-question" :link="backpack_url('team-member')" />
<x-backpack::menu-item title="Faqs" icon="la la-question" :link="backpack_url('faq')" />
<x-backpack::menu-item title="Testimonials" icon="la la-question" :link="backpack_url('testimonial')" />
<x-backpack::menu-item title="Testimonial stats" icon="la la-question" :link="backpack_url('testimonial-stats')" />
<x-backpack::menu-item title="Portfolio projects" icon="la la-question" :link="backpack_url('portfolio-project')" />
<x-backpack::menu-item title="About us" icon="la la-question" :link="backpack_url('about-us')" />
<x-backpack::menu-item title="Home sliders" icon="la la-question" :link="backpack_url('home-slider')" />
<x-backpack::menu-item title="Home page icons" icon="la la-question" :link="backpack_url('home-page-icon')" />
<x-backpack::menu-item title="Portfolio project with pages" icon="la la-question" :link="backpack_url('portfolio-project-with-page')" />
<x-backpack::menu-item title="Portfolio project images" icon="la la-question" :link="backpack_url('portfolio-project-images')" />