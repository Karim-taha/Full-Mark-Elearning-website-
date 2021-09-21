@extends('layouts.general')

@section('special-header')
    <link rel="stylesheet" href="./style/privacy&terms.css" />
@endsection

@section('main-body')
    <main id="main-body" class="d-flex align-items-stretch">
        <aside id="privacy-aside">
            <div id="aside-container">
                <span class="d-flex flex-nowrap">
                    <input type="button" class="btn-gnrl active-btn" value="Privacy Policy" id="privacy-btn" />
                    <input type="button" class="btn-gnrl" value="Terms" id="terms-btn" />
                </span>
                <div class="content-control" id="privacy-contents">
                    <h2>Privacy Policy</h2>
                    <h3>Table of contents</h3>
                    <ol>
                        <li onclick='scrollPage("General")'>General</li>
                        <li onclick='scrollPage("Applicability")'>Applicability</li>
                        <li onclick='scrollPage("Access")'>Access</li>
                        <li onclick='scrollPage("Personal-Information")'>Personal Information</li>
                        <li onclick='scrollPage("Automatic-Information-Collection")'>Automatic Information Collection
                        </li>
                        <li onclick='scrollPage("Information-Security")'>Information Security</li>
                        <li onclick='scrollPage("Use-of-your-personal-information")'>Use of your personal information
                        </li>
                        <li onclick='scrollPage("Exceptions")'>Exceptions</li>
                    </ol>
                </div>
                <div class="content-control hide" id="terms-content">
                    <h2>Terms and Conditions</h2>
                    <h3>Table of contents</h3>
                    <ol>
                        <li onclick='scrollPage("About-Full-Mark")'>About Full Mark</li>
                        <li onclick='scrollPage("Full-Mark-Platform")'>Full Mark Platform</li>
                        <li onclick='scrollPage("Full-Mark-Accounts")'>Full Mark Accounts</li>
                        <li onclick='scrollPage("Access-Permissions-and-Restrictions")'>Access, Permissions and
                            Restrictions</li>
                        <li onclick='scrollPage("Content-Use")'>Content Use</li>
                        <li onclick='scrollPage("Content-and-Conduct")'>Content and Conduct</li>
                        <li onclick='scrollPage("Full-Mark-Paid-Subscription")'>Full Mark Paid - Subscription</li>
                        <li onclick='scrollPage("Full-Mark-Intellectual-Property-Right")'>Full Mark Intellectual
                            Property Right</li>
                        <li onclick='scrollPage("Refunds")'>Refunds</li>
                        <li onclick='scrollPage("Electronic-Communication")'>Electronic Communication</li>
                    </ol>
                </div>
            </div>
        </aside>
        <article id="main-article">
            <ol id="terms-iframe" class="hide privacy-polcy-text">
                <p>
                    As updated on April 4, 2020 Welcome to the Full Mark’s terms and
                    condition. These terms and conditions (“Terms and Conditions”), are
                    between Full Mark and you, (hereinafter referred to as “You” or
                    “Your” or “User(s)”). By accessing our website www.noonacademy.com
                    (“Website”) and/or our app ‘Full Mark Studnt App’ and/or ‘Noon
                    Academy Teacher App’ (“Apps”), Website and Apps together shall be
                    referred to as “Full Mark Platform”, you agree to be bound by the
                    provisions of these Terms and Conditions. Please read these Terms
                    and Conditions, along with the Privacy Policy and all other rules
                    and policies made available or published on Full Mark Platform as
                    they shall govern your use of the Full Mark Platform. By using or
                    visiting the Full Mark Platform or any Full Mark software,
                    data feeds, and service provided to you on, from, or through the
                    Full Mark Platform, you signify your agreement to (1) these
                    “Terms and Conditions”, (2) Full Mark’s Privacy Policy and any
                    other terms that are updated from time to time. If you do not agree
                    to any of these terms, please do not use the Full Mark Platform.
                </p>
                <li>
                    <h3 id="About-Full-Mark">About Full Mark</h3>
                    <p>
                        The domain name, Website and the Apps are owned, registered and
                        operated by Noon Education Holding Limited, a private company
                        incorporated under the (Abu Dhabi Global Market ADGM), and having
                        its registered office at office 2064, 24th Floor, Al sila Tower,
                        Abu Dhabi Global Market Square – Almaryah Island, Abu Dhabi UAE ,
                        (hereinafter referred to as “Full Mark” or “ us” or “we” or
                        “our” or “Company”).
                    </p>
                </li>
                <li>
                    <h3 id="Full-Mark-Platform">Full Mark Platform</h3>
                    <p>
                        These Terms and Conditions apply to all Users of the Full Mark
                        Platform, including educators/teachers who are also contributors
                        of User Content on the Full Mark Platform. The Full Mark
                        Platform includes all aspects of the Website and Apps which
                        includes but is not limited to products, software and service
                        offered via the Full Mark Platform, such as the Full Mark
                        online platform, and any other service or application that Noon
                        Academy introduces from time to time. Full Mark Platform is an
                        online platform that supports and facilitates the online delivery
                        of live turning sessions and the creation of educational videos/or
                        tutorials, by the Users of the Full Mark Platform and acts as
                        an intermediary between the educator/teacher and the User. A User
                        may teach live sessions and/or create a video, audio clip or
                        tutorial, by using the Full Mark Platform. Such content
                        broadcasted live or uploaded through the use of the Full Mark
                        Platform shall hereinafter be referred to as “User Content”. You
                        agree and acknowledge that Full Mark has no control over and
                        assumes no responsibility for, the User Content and by using the
                        Full Mark Platform, you expressly relieve Full Mark from any
                        and all liability arising from the User Content. The Full Mark
                        Platform may include or contain links to any third-party websites
                        that may or may not be owned or controlled by Full Mark. Noon
                        Academy has no control over, and assumes no responsibility for,
                        the content, privacy policies, or practices of any third-party
                        websites. In addition, Full Mark will not and cannot censor or
                        edit the content of any third-party site. By using the Noon
                        Academy Platform, you expressly relieve Full Mark from any and
                        all liability arising from your use of any third-party website or
                        services. However, we recommend that before you use any
                        third-party services or website you read and understand the terms
                        and conditions and privacy policy of each such website that you
                        visit. Subject to these Terms and Conditions, Privacy Policy and
                        all other other rules and policies made available or published
                        elsewhere, Full Mark hereby grants the you a non-exclusive,
                        non-transferable, non-sublicensable, limited license to use the
                        Full Mark Platform in accordance with these Terms and
                        Conditions. You agree and acknowledge that Full Mark shall have
                        the right at any time to change or discontinue any aspect or
                        feature of the Full Mark Platform, including, but not limited
                        to, the User Content, hours of availability and equipment needed
                        for access or use. Further, Full Mark may discontinue
                        disseminating any portion of information or category of
                        information may change or eliminate any transmission method and
                        may change transmission speeds or other signal characteristics.
                        Full Mark reserves the right to refuse access to the Noon
                        Academy Platform, terminate Accounts, remove or edit contents
                        without any notice to You.
                    </p>
                </li>
                <li>
                    <h3 id="Full-Mark-Accounts">Full Mark Accounts</h3>
                    <p>
                        In order to access some of the features of the Full Mark
                        Platform, you may have to create your account with Full Mark.
                        You agree and confirm that you will never use another User’s
                        account nor provide access to your account to any third-party.
                        When creating your account, you confirm that the information so
                        provided is accurate and complete. Further, you agree that you are
                        solely responsible for the activities that occur on your account,
                        and you shall keep your account password secure and not share the
                        same with anyone. You must notify Full Mark immediately of any
                        breach of security or unauthorized use of your account. At no
                        point in time will Full Mark be liable for any losses caused by
                        any unauthorized use of your account, you shall solely be liable
                        for the losses caused to Full Mark or others due to such
                        unauthorized use, if any. Full Mark takes no responsibility for
                        any User Content that is uploaded on the Full Mark Platform,
                        and further, the User shall be solely responsible for his or her
                        own actions in utilizing such User Content and availing the Noon
                        Academy Platform provided herein.
                    </p>
                </li>
                <li>
                    <h3 id="Access-Permissions-and-Restrictions">Access, Permissions and Restrictions</h3>
                    <p>
                        Full Mark hereby grants you permission to access and use the
                        Full Mark Platform as set forth in these Terms and Conditions,
                        provided that: You agree not to distribute in any medium any part
                        of the Full Mark Platform or the content without Full Mark’s
                        prior written authorization. You agree not to alter or modify any
                        part of the Full Mark Platform. You agree not to access content
                        of any other User through any technology or means. You agree not
                        to use the Full Mark Platform for any of the following
                        commercial uses unless you obtain Full Mark’s prior written
                        approval: the sale of access to the Full Mark Platform; the
                        sale of advertising, sponsorships, or promotions placed on or
                        within the Full Mark Platform or content; or the sale of
                        advertising, sponsorships, or promotions on any page or website
                        that provide similar Full Mark Platform as that of Noon
                        Academy. You agree to receive installs and updates from time to
                        time from Full Mark. These updates are designed to improve,
                        enhance and further develop the Full Mark Platform and may take
                        the form of bug fixes, enhanced functions, new software modules
                        and completely new versions. You agree to receive such updates
                        (and permit Full Mark to deliver these to you) as part of your
                        use of the Full Mark Platform. You agree not to use or launch
                        any automated system, including without limitation, “robots,”
                        “spiders,” or “offline readers,” that accesses the Full Mark
                        Platform in a manner that sends more request messages to Noon
                        Academy’s servers in a given period of time than a human can
                        reasonably produce in the same period by using a conventional
                        on-line web browser. Notwithstanding the foregoing, Full Mark
                        grants the operators of public search engines permission to use
                        spiders to copy materials from the site for the sole purpose of
                        and solely to the extent necessary for creating publicly available
                        searchable indices of the materials, but not caches or archives of
                        such materials. Full Mark reserves the right to revoke these
                        exceptions either generally or in specific cases at any time with
                        or without providing any notice in this regard. You agree not to
                        collect or harvest any personally identifiable information,
                        including account names, from the Full Mark Platform, nor to
                        use the communication systems provided by the Full Mark
                        Platform (e.g., comments, email) for any commercial solicitation
                        purposes. You agree not to solicit, for commercial purposes, any
                        Users of the Full Mark Platform with respect to User Content.
                        You may post reviews, comments and other content; send other
                        communications; and submit suggestions, ideas, comments, questions
                        or other information as long as the content is not illegal,
                        obscene, threatening, defamatory, invasive of privacy,
                        infringement of intellectual property rights, or otherwise
                        injurious to third parties or objectionable and does not consist
                        of or contain software viruses, political campaigning, commercial
                        solicitation, chain letters, mass mailings or any other form of
                        spam. Further, you give Full Mark limited, royalty free,
                        worldwide, non-exclusive license to use the User Content and
                        communication in developing its Full Mark Platform and in any
                        of its marketing or promotional activities. In your use of the
                        Full Mark Platform, you will at all times comply with all
                        applicable laws and regulations. Full Mark reserves the right
                        to discontinue any aspect of the Full Mark Platform at any time
                        with or without notice at its sole discretion.
                    </p>
                </li>
                <li>
                    <h3 id="Content-Use">Content Use</h3>
                    <p>
                        In addition to the general restrictions mentioned above, the
                        following limitation and conditions shall apply to your use of the
                        Content. Full Mark Content utilized on the Full Mark
                        Platform which shall include but not be limited to trademarks,
                        service marks and logos (“Marks”), process, images, software,
                        graphics are owned by or licensed to Full Mark and subject to
                        copyright and other intellectual property rights under the law.
                        User Content is provided to you on an AS IS basis. You may access
                        Content for your information and personal use solely as intended
                        through the provided functionality on the Full Mark Platform
                        and as permitted under these Terms and Conditions. You shall not
                        download any User Content unless you see a “download” or similar
                        link displayed by Full Mark on the Full Mark Platform for
                        that User Content. You shall not copy, reproduce, make available
                        online or electronically transmit, publish, adapt, distribute,
                        transmit, broadcast, display, sell, license, or otherwise exploit
                        any User Content for any other purposes other than as provided
                        herein without the prior written consent of Full Mark or the
                        respective licensors of the User Content. Full Mark and its
                        licensors reserve all rights not expressly granted in and to the
                        Full Mark Platform and the User Content. You agree not to
                        circumvent, disable or otherwise interfere with security-related
                        features of the Full Mark Platform or features that prevent or
                        restrict use or copying of any User Content or enforce limitations
                        on use of the Full Mark Platform or the User Content therein.
                        You understand that when using the Full Mark Platform, you will
                        be exposed to User Content from variety of sources and by
                        different Users, and that Full Mark is not responsible for the
                        accuracy, usefulness, safety, or intellectual property rights of
                        or relating to such User Content. You further understand and
                        acknowledge that you may be exposed to User Content that is
                        inaccurate, offensive, indecent, or objectionable, and you agree
                        to waive, and hereby do waive, any legal or equitable rights or
                        remedies you have or may have against Full Mark with respect
                        thereto, and, to the extent permitted by applicable law, agree to
                        indemnify and hold harmless Full Mark, its owners, operators,
                        affiliates, licensors, and licensees to the fullest extent allowed
                        by law regarding all matters related to your use of the Noon
                        Academy Platform.
                    </p>
                </li>

                <li>
                    <h3 id="Content-and-Conduct">Content and Conduct</h3>
                    <p>
                        As a Full Mark User, you may submit User Content on the Noon
                        Academy Platform, including videos, images and User comments. You
                        understand that Full Mark does not guarantee any
                        confidentiality with respect to any User Content you submit. You
                        shall be solely responsible for your own User Content and the
                        consequences of submitting and publishing such User Content on the
                        Full Mark Platform. You affirm, represent, and warrant that you
                        own or have the necessary licenses, rights, consents, and
                        permissions to publish the User Content that you submit; and you
                        grant limited license to Full Mark to all patent, trademark,
                        trade secret, copyright or other proprietary rights in and to such
                        User Content for publication on the Full Mark Platform pursuant
                        to these Terms and Conditions for the duration the said User
                        Content is available on Full Mark Platform. For clarity, Noon
                        Academy retains the ownership rights in your User Content.
                        However, by submitting User Content to Full Mark, you hereby
                        grant Full Mark a limited, worldwide, non-exclusive,
                        royalty-free, sub-licenseable and transferable license to use,
                        reproduce, distribute, display, publish, make available online or
                        electronically transmit, the User Content in connection with the
                        Full Mark Platform and Full Mark’s (and its successors’ and
                        affiliates’) business, including without limitation for promoting
                        and redistributing part or all of the Full Mark Platform in any
                        media formats and through any media channels. You also hereby
                        grant each User of the Full Mark Platform a limited,
                        non-exclusive license to access your User Content through the Noon
                        Academy Platform. The above licenses granted by you in the User
                        Content you submit to the Full Mark Platform terminate within a
                        commercially reasonable time after you request Full Mark to
                        remove or delete your videos from the Full Mark Platform
                        provided you pay the mutually agreed amount that Full Mark
                        incurred in providing the Full Mark Platform to you. You
                        understand and agree, however, that Full Mark may retain, but
                        not display, distribute, or perform, server copies of your videos
                        that have been removed or deleted. The above licenses granted by
                        you in User comments and testimonial you submit are perpetual and
                        irrevocable. You further agree that User Content you submit on the
                        Full Mark Platform will not contain third party copyrighted
                        material, or material that is subject to other third party
                        proprietary rights, unless you have permission from the rightful
                        owner of the material or you are otherwise legally entitled to
                        post the material and to grant Full Mark all of the license
                        rights granted herein. Furthermore, you confirm that the User
                        Content uploaded by you is not: False, inaccurate or misleading;
                        Infringe any third party’s copyright, patent, trademark, trade
                        secret or other proprietary rights or rights of publicity or
                        privacy; Violate any law, statue, ordinance or regulation;
                        defamatory, unlawfully threatening or unlawfully harassing;
                        obscene or contain pornography. Contain any viruses, trojan
                        horses, worms, cancelbots or other computer programming routines
                        that may damage, detrimentally interfere with, surreptitiously
                        intercept or expropriate any system, data or personal information.
                        You understand and confirm that you shall not during your use of
                        the Full Mark Platforms at any time post or publish any
                        content, comments or act in any way which will amount to
                        harassment of any other User, whether a learner or an educator. If
                        at any given point it comes to the notice of Full Mark that you
                        are engaged in any kind of harassment of other Users, then in such
                        a case you agree that Full Mark shall have the sole right to
                        suspend/terminate your account with immediate effect and without
                        any notice of such suspension or termination and we also reserve
                        the right in our sole discretion to initiate any legal proceedings
                        against you in such cases. Full Mark at its sole discretion may
                        process any audio or audio-visual content uploaded by you to the
                        Full Mark Platform to confirm if the same is in accordance with
                        the Full Mark internal quality requirements and is compatible
                        with the Full Mark Platform. Full Mark does not endorse any
                        User Content submitted on the Full Mark Platform by any User or
                        other licensor, or any opinion, recommendation, or advice
                        expressed therein, and Full Mark expressly disclaims any and
                        all liability in connection with User Content. Full Mark does
                        not permit copyright infringing activities and infringement of
                        intellectual property rights on the Full Mark Platform, and
                        Full Mark will remove all User Content if properly notified
                        that such Content infringes on another’s intellectual property
                        rights. Full Mark reserves the right to remove User Content
                        without prior notice if it has reason to believe that the User
                        Content infringes any copyright.
                    </p>
                </li>
                <li>
                    <h3 id="Full-Mark-Paid-Subscription">Full Mark Paid - Subscription</h3>
                    <p>
                        Please refer to Full Mark Paid – Subscription terms and
                        conditions to know more about the terms that shall govern your
                        subscription. Full Mark Paid – Subscription is exclusive for
                        the Users who have subscribed. You shall not give any unauthorized
                        access or distribute or reproduce the Educational Content (as
                        defined in the Subscription terms and conditions) to a third
                        party. In the event that Full Mark becomes aware of any Users
                        giving unauthorized access to any third party or distributing or
                        reproducing any Educational Content to or any third-party channel
                        or media, Full Mark reserves the right to suspend or terminate
                        the said User’s account with immediate effect.
                    </p>
                </li>
                <li>
                    <h3 id="Full-Mark-Intellectual-Property-Right">Full Mark Intellectual Property Right</h3>
                    <p>
                        The Full Mark Platform, the processes, and their selection and
                        arrangement, including but not limited to all text, graphics, User
                        interfaces, visual interfaces, sounds and music (if any), artwork
                        and computer code on the Full Mark Platform is owned and
                        controlled by Full Mark and the design, structure, selection,
                        coordination, expression, look and feel and arrangement of such
                        content mentioned hereinabove is protected by copyright, patent
                        and trademark laws, and various other national and international
                        IPR laws and regulations. For clarity, content in the above
                        sentence shall not include User Content. Unless otherwise
                        indicated or anything contained to the contrary, or any
                        proprietary material owned by a third-party and so expressly
                        mentioned, Full Mark owns all IPR to and into the trademark
                        “NOONACADEMY”, “Full Mark” and the Full Mark Platform. The
                        mark “Full Mark” is the sole property of Full Mark.
                        Reproduction in whole or in part of the same is strictly
                        prohibited unless used with an express written permission from
                        Full Mark.
                    </p>
                </li>
                <li>
                    <h3 id="Refunds">Refunds</h3>
                    <p>
                        Any refunds that are to be processed shall be processed in
                        accordance with Full Mark’s refund policy.
                    </p>
                </li>
                <li>
                    <h3 id="Electronic-Communication">Electronic Communication</h3>
                    <p>
                        When you visit Full Mark Platform or send email to us, you are
                        communicating with us electronically. By communicating with us,
                        you consent to receive communication from us electronically. We
                        will communicate with you by email or posting notices on Noon
                        Academy Platform. You agree that all agreements, notices,
                        disclosures, disclaimers, offers and other communications that are
                        provided to you electronically satisfy any legal requirement that
                        such communication should be in writing.
                    </p>
                </li>
            </ol>
            <ol id="privacy-iframe" class="privacy-polcy-text">
                <li>
                    <h3 id="General">General</h3>
                    <p>
                        In this policy, the words "we", "our", and "us" refer to Full Mark
                        Academy and the privacy mechanism outlined identify personally
                        identifiable or personal information that may be collected, how
                        such information is used, and the choices you have regarding our
                        use of this information. In addition to the terms stated in Terms
                        of Service provided under this Website/mobile application
                        (together “Platform”), we are committed to protecting your
                        privacy. Authorized representatives of Full Mark Academy on a need
                        to know basis only use any information received from you. We
                        constantly review our systems and data to secure your personal
                        information. We will investigate any complaint or such actions
                        with a view to prosecuting and/or taking civil proceedings to
                        recover damages against those responsible. Any User who does not
                        agree with any provisions of this Privacy Policy and the Terms of
                        Service is required to leave the Platform immediately. Should you
                        disagree with this Policy (defined below) and still continue to
                        access the Platform and provide your personal information,
                        Full Mark Academy disclaim all the liabilities arising therefrom
                        and it shall be assumed by your continued use of the Platform that
                        you have accepted the Policy and any other online terms and
                        conditions available on the Platform
                    </p>
                </li>
                <li>
                    <h3 id="Applicability">Applicability</h3>
                    <p>
                        A. General In this policy, the words "we", "our", and "us" refer
                        to Full Mark Academy and the privacy mechanism outlined identify
                        personally identifiable or personal information that may be
                        collected, how such information is used, and the choices you have
                        regarding our use of this information. In addition to the terms
                        stated in Terms of Service provided under this Website/mobile
                        application (together “Platform”), we are committed to protecting
                        your privacy. Authorized representatives of Full Mark Academy on a
                        need to know basis only use any information received from you. We
                        constantly review our systems and data to secure your personal
                        information. We will investigate any complaint or such actions
                        with a view to prosecuting and/or taking civil proceedings to
                        recover damages against those responsible. Any User who does not
                        agree with any provisions of this Privacy Policy and the Terms of
                        Service is required to leave the Platform immediately. Should you
                        disagree with this Policy (defined below) and still continue to
                        access the Platform and provide your personal information,
                        Full Mark Academy disclaim all the liabilities arising therefrom
                        and it shall be assumed by your continued use of the Platform that
                        you have accepted the Policy and any other online terms and
                        conditions available on the Platform. B. Applicability This
                        privacy policy (“Policy”) applies to all Users who access the
                        Platform and are therefore required to read and understand the
                        Policy before submitting any Personal Information (defined
                        hereinafter). If you have inadvertently submitted any Personal
                        Information to Full Mark Academy prior to reading the Policy
                        statements set out herein, and you do not agree with the manner in
                        which the Personal Information is collected, stored or used, then
                        you may access, modify and delete all information stored about You
                        by writing to us at support@noonacademy.com. Full Mark Academy is
                        keeping personal data of the User, and every User is also entitled
                        to require Full Mark Academy to delete and destroy all such
                        information (but not that of other Users). This Policy applies to
                        the Platform and any other services that are owned and operated by
                        Full Mark Academy. Third party websites may place their own
                        cookies or other files on the Users' computer, collect data or
                        solicit personal information from the Users, for which Full Mark
                        Academy is not responsible or liable. Accordingly, Full Mark
                        Academy does not make any representations concerning the privacy
                        practices or policies of such third parties or terms of use of
                        such websites, nor does Full Mark Academy guarantee the accuracy,
                        integrity, or quality of the information, data, text, software,
                        sound, photographs, graphics, videos, messages or other materials
                        available on such websites. The inclusion or exclusion does not
                        imply any endorsement by Full Mark Academy of the website, the
                        website's provider, or the information on the website. Full Mark
                        Academy encourages the User to read the privacy policies of that
                        such website. Full Mark Academy has taken all reasonable
                        precautions to treat Personal Information as confidential with
                        industry standards that it has implemented to protect from
                        unauthorized access, improper use or disclosure, modification and
                        unlawful destruction or accidental loss of the Personal
                        Information
                    </p>
                </li>
                <li>
                    <h3 id="Access">Access</h3>
                    <p>
                        User are allowed to access the Platform, join groups, and avail
                        services available with Full Mark Academy as a guest and without
                        creating an account on the Platform or providing any Personal
                        Information, Full Mark takes no responsibility or validate the
                        information provided by the guest, except as otherwise required
                        under any law, regulation or an order of competent authority. In
                        order to have access to all the features and benefits on our
                        Platform, a User is required to first create an account on our
                        Platform. To create an account, a User is required to provide
                        Personal Information as may be required during the time of
                        registration. Other information requested on the registration
                        page, including the ability to receive promotional offers from
                        Full Mark, is optional. Full Mark Academy may, in future,
                        include other optional requests for information from the User to
                        help Full Mark Academy to customize the Platform to deliver
                        personalized information to the User. Without User's agreement,
                        Full Mark Academy will not share, rent or sell any Personal
                        Information with third parties in any way other than what is
                        disclosed in this Policy. Full Mark Academy may keep records of
                        telephone calls received and made for making enquiries, registered
                        courses, feedback or other purposes for the purpose of rendering
                        services effectively and efficiently.
                    </p>
                </li>
                <li>
                    <h3 id="Personal-Information">Personal Information</h3>
                    <p>
                        Personal Information” shall mean the information which identifies
                        the User, name, identification number, email address, age, phone
                        number, password or any financial account information provided to
                        Full Mark Academy at the time of registration or any time
                        thereafter.
                    </p>
                </li>
                <li>
                    <h3 id="Automatic-Information-Collection">Automatic Information Collection</h3>
                    <p>
                        Our system collects information that is sent over the internet
                        without your control. Some examples of the information we collect
                        and analyse include the Internet protocol (IP) address used to
                        connect your computer to the internet; login; email; password;
                        computer and connection information such as browser type and
                        version, operating system, and platform; groups enrolled history,
                        which we sometimes aggregate with similar information from other
                        users to create features, reports such as popular courses, most
                        used features etc; the full Uniform Resource Locator (URL) click
                        stream to, and from our Platform, including date and time; cookie
                        number; courses or videos you viewed or searched for; the email id
                        you used to call our customer service. During some visits we may
                        use software tools such as JavaScript to measure and collect
                        session information, including page response times, download
                        errors, length of visits to certain page, course and videos, page
                        interaction information (such as scrolling, clicks and mouse
                        overs), and methods used to browse away from the page.
                    </p>
                </li>
                <li>
                    <h3 id="Information-Security">Information Security</h3>
                    <p>
                        To protect the security of your Personal information during
                        transmission, we use Secure Sockets Layer (SSL) software, which
                        encrypts information you input. To prevent unauthorized access to
                        sensitive information, it is important for you to monitor those
                        who have access to your password and to your computer, laptop or
                        any other device through which your account can be accessed. Be
                        sure to sign off when finished while using a shared computer.
                    </p>
                </li>
                <li>
                    <h3 id="Use-of-your-personal-information">Use of your personal information</h3>
                    <p>
                        While availing our services you will provide access to Full Mark
                        Academy with your Personal Information. If that information is
                        wrong, you can request us to modify or delete the same. Full Mark
                        Academy will take all reasonable measures to ensure that the
                        Personal Information is modified and used for rendering services
                        to you and as otherwise in compliance with laws. When editing or
                        deleting Personal Information, we may ask you to verify your
                        identity before we can act on your request. Full Mark Academy may
                        at its discretion reject any request that is contrary to law,
                        requires un-reasonable technical efforts. We do not assure that we
                        will delete all residual copies and archives made by any third
                        party without our knowledge and consent. Full Mark Academy shall
                        use your Personal Information to communicate with you. The said
                        communication can either be by emails. If at any time you wish to
                        not receive any communication from our end you can opt-out of the
                        same by writing to us on support@noonacademy.com.
                    </p>
                </li>
                <li>
                    <h3 id="Exceptions">Exceptions</h3>
                    <p>
                        Your Personal Information may be shared with third parties who
                        have a need or authority to receive such information, if we have a
                        good-faith belief that access, use, preservation or disclosure of
                        the information is reasonably necessary to comply with (i) in
                        response to any authority having to receive such information under
                        law (ii) any order of court (iii) detect, prevent, or otherwise
                        address fraud, security or technical issues (iv) protect against
                        harm to the rights, property or safety of Full Mark Academy, our
                        users or the public as required or permitted by law. User choices
                        with regard to access of information Full Mark Academy does not
                        make any unsolicited calls or otherwise market any products or
                        services, except for in relation to the purpose for which such
                        information has been provided or taking any feedback, addressing
                        any complaints, informing you about new features or free/paid
                        courses. User shall not disclose their Personal Information to any
                        third parties that us not authorised by Full Mark Academy and
                        verify the identity of such person who seek information. Full Mark
                        Academy will communicate with the Users through call, SMS, email
                        or notices posted on the Platform or through any other means
                        available, which shall include but not be limited to text, other
                        forms of messaging, calls etc. The Users can change their e-mail
                        and contact preferences at any time by logging into their account
                        or by emailing at support@noonacademy.com. Full Mark Academy may,
                        if you so choose, send direct mailers to you at the address given
                        by you. You have the option to 'opt-out' of this direct mailer by
                        way of links provided at the bottom of each mailer. We respect
                        your privacy and to the extent that you choose not to receive such
                        mailers, we will take all steps to remove you from the list.
                        Should you evidence any violation of our terms and policies,
                        please write to us at support@noonacademy.com and report such
                        incident. All the information provided to Full Mark Academy by
                        you, you as a User confirms that the same including sensitive
                        Personal Information, is true, accurate and voluntary. User has
                        the right to withdraw information at any time, in accordance with
                        the terms of this Policy and the Terms of Service. Report,
                        Analysis & Confidentiality Full Mark Academy may have to use
                        Personal Information without reference to any persona or identity
                        for research, statistical analysis and business intelligence
                        purpose and may transfer such research, statistical or
                        intelligence data in an aggregated or non-personally identifiable
                        form to third parties and affiliates. All Full Mark Academy
                        employees and data processors, who have access to, and are
                        associated with the processing of sensitive personal data or
                        information, are obliged to respect the confidentiality of every
                        User's sensitive personal data and information. Sharing of
                        Information Full Mark Academy may also disclose or transfer User's
                        personal and other information which a User provides, to another
                        third party as part of reorganization or a sale of the assets of
                        Full Mark Academy corporation division or company. Any third party
                        to which Full Mark Academy transfers or sells its assets will have
                        the right to continue to use the personal and other information
                        that a User provide to us. To the extent necessary to provide
                        Users with the services on the Platform, Full Mark Academy may
                        provide User’s Personal Information to third party contractors who
                        work on behalf of or with Full Mark Academy to provide Users with
                        such services, to help Full Mark Academy communicate with Users or
                        to maintain the Platform. Generally, these contractors do not have
                        any independent right to share this information, however certain
                        contractors who provide services on the Platform, including the
                        providers of online communications services, online payment
                        gateway services, will have rights to use and disclose the
                        Personal Information collected in connection with the provision of
                        these services in accordance with their own privacy policies.
                        Revision of terms & Grievance reporting Full Mark Academy may
                        update or amend this Policy at any time, with or without advance
                        notice. In the event there are significant changes in the way
                        Full Mark Academy treats User's personally identifiable
                        information, Full Mark Academy will display a notice on the
                        Platform or send Users an email. Full Mark Academy's current
                        Policy to all information that Full Mark Academy has about Users
                        and their account. Notwithstanding the above, Full Mark Academy
                        shall not be required to notify the Users of any changes made to
                        the privacy policy. Should you have any concern or reject the
                        changes in the privacy policy you can refuse to accept the
                        amendments and opt for withdrawing your Personal Information by
                        writing to us at support@noonacademy.com. If you have any
                        compliant or grievances with respect to Website or Privacy Policy
                        please write to us support@noonacademy.com
                    </p>
                </li>
            </ol>
        </article>
    </main>
@endsection

@section('special-end-page')
    <script src="./scripts/privacy.js"></script>
@endsection