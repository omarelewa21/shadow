<x-base :title="'Privacy Policy - Shadow Creative Agency'">
    @push('styles')
        <style>
            .privacy-policy {
                position: relative;
                display: block;
                background: var(--thm-black);
                padding: 120px 0px 20px;
                z-index: 1;
            }
            .privacy-policy ul {
                list-style-type: disc;
                margin-left: 20px;
            }
        </style>
    @endpush

<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2 class="wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">Privacy Policy</h2>
            <ul class="thm-breadcrumb wow fadeInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><span>-</span></li>
                <li>Privacy Policy</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->

<section class="privacy-policy">
    <div class="container">
        <p>Welcome to Shadow Creative Agency. Your privacy is critically important to us.
            This Privacy Policy explains how we collect, use, and disclose information about you when you use our website,
            <a style="color: wheat" href="https://shadow-creative.agency">shadow-creative.agency</a>
            , and any related services.
        </p>
        </br>

        <h4>Information We Collect</h4>
        <p>We may collect the following types of information:</p>
        <ul>
            <li><strong>Personal Information:</strong> Name, email address, phone number, etc., when voluntarily provided.</li>
            <li><strong>Usage Data:</strong> Information about how you interact with our site (e.g., pages viewed, time spent).</li>
            <li><strong>Cookies:</strong> Small files stored on your device to enhance the user experience.</li>
        </ul>
        </br>

        <h4>How We Use Your Information</h4>
        <p>We may use your information for the following purposes:</p>
        <ul>
            <li>To provide and improve our services.</li>
            <li>To communicate with you about updates or promotions.</li>
            <li>To analyze site usage and improve functionality.</li>
        </ul>
        </br>

        <h4>Sharing of Information</h4>
        <p>We do not sell, trade, or rent your personal information to others. We may share your information with:</p>
        <ul>
            <li>Service providers who help us operate the website or provide services.</li>
            <li>Legal authorities, if required by law.</li>
        </ul>
        </br>

        <h4>Cookies and Tracking</h4>
        <p>We use cookies to personalize your experience on our website. You can adjust your browser settings to refuse cookies, but some features of the site may not work properly.</p>
        </br>

        <h4>Your Rights</h4>
        <p>You have the right to:</p>
        <ul>
            <li>Access and update your personal information.</li>
            <li>Request deletion of your personal data.</li>
            <li>Opt-out of marketing communications.</li>
        </ul>
        </br>

        <h4>Contact Us</h4>
        <p>If you have any questions about this Privacy Policy, please contact us at:</p>
        <p style="color: #d0c9c9">
            Shadow Creative Agency<br>
            Email: <a style="color: #d0c9c9" href="mailto:info@shadow-creative.agency">Shadow.creative.agency@gmail.com</a><br>
            Phone: <a style="color: #d0c9c9" href="tel:+201000626509">+201000626509</a>
        </p>
        </br>

        <h4>Changes to This Policy</h4>
        <p>We may update this Privacy Policy from time to time. Changes will be posted on this page with a revised effective date.</p>

        <p>Thank you for trusting Shadow Creative Agency.</p>
    </div>
</section>
</x-base>
