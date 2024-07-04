<!DOCTYPE html>
<html lang="en">
  
@include('client.includes.head')
  <body>
    <div data-barba="wrapper">
     <!-- PAGE PRELOADER -->
     <div class="preloader text-center bg-dark-2" id="js-preloader" data-arts-theme-text="light">
        <div class="preloader__content">
          <!-- header -->
          <div class="preloader__header mt-auto">
            <div class="preloader__heading h2"><img src="{{asset('public/assets1/img/assets/projects/card.png')}}" style="height:100px;"></div>
          
          </div>
          <!-- - header -->
          <!-- counter -->
          <div class="preloader__counter h5"><span class="preloader__counter-number preloader__counter-current">0</span><span class="preloader__counter-divider">&nbsp;&nbsp;/&nbsp;&nbsp;</span><span class="preloader__counter-number preloader__counter-total">100</span></div>
          <!-- - counter -->
          <!-- circle holder -->
          <div class="preloader__circle"></div>
          <!-- - circle holder -->
        </div>
      </div>
      <!-- - PAGE PRELOADER -->
      <!-- Loading Spinner -->
      <svg class="spinner d-lg-none" id="js-spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
        <circle class="spinner__path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
      </svg>
      <!-- - Loading Spinner -->
      <!-- Transition Curtain-->
      <!-- TRANSITION CURTAINS -->
      <!-- page curtain AJAX transition -->
      <div class="curtain transition-curtain" id="js-page-transition-curtain">
        <div class="curtain__wrapper-svg">
          <svg class="curtain-svg" viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Default Rectangle -->
            <path class="curtain-svg__normal" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
            <!-- - Default Rectangle -->
            <!-- Curve Top -->
            <path class="curtain-svg__curve curtain-svg__curve_top-desktop" d="M0,300 C305.333333,100 625.333333,0 960,0 C1294.66667,0 1614.66667,100 1920,300 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,300 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_top-mobile" d="M0,150 C305.333333,50 625.333333,0 960,0 C1294.66667,0 1614.66667,50 1920,150 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,150 Z"></path>
            <!-- - Curve Top -->
            <!-- Curve Bottom -->
            <path class="curtain-svg__curve curtain-svg__curve_bottom-desktop" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_bottom-mobile" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1030 1294.66667,1005 960,1005 C625.333333,1005 305.333333,1030 0,1080 L0,0 Z"></path>
            <!-- - Curve Bottom -->
          </svg>
        </div>
      </div>
      <!-- - page curtain AJAX transition -->
      <!-- header curtain show/hide -->
      <div class="header-curtain curtain" id="js-header-curtain">
        <div class="curtain__wrapper-svg">
          <svg class="curtain-svg" viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Default Rectangle -->
            <path class="curtain-svg__normal" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
            <!-- - Default Rectangle -->
            <!-- Curve Top -->
            <path class="curtain-svg__curve curtain-svg__curve_top-desktop" d="M0,300 C305.333333,100 625.333333,0 960,0 C1294.66667,0 1614.66667,100 1920,300 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,300 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_top-mobile" d="M0,150 C305.333333,50 625.333333,0 960,0 C1294.66667,0 1614.66667,50 1920,150 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,150 Z"></path>
            <!-- - Curve Top -->
            <!-- Curve Bottom -->
            <path class="curtain-svg__curve curtain-svg__curve_bottom-desktop" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_bottom-mobile" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1030 1294.66667,1005 960,1005 C625.333333,1005 305.333333,1030 0,1080 L0,0 Z"></path>
            <!-- - Curve Bottom -->
          </svg>
        </div>
      </div>
      <!-- - header curtain show/hide -->
      <!-- header curtain AJAX transition -->
      <div class="header-curtain header-curtain_transition curtain" id="js-header-curtain-transition">
        <div class="curtain__wrapper-svg">
          <svg class="curtain-svg" viewBox="0 0 1920 1080" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Default Rectangle -->
            <path class="curtain-svg__normal" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,0 Z"></path>
            <!-- - Default Rectangle -->
            <!-- Curve Top -->
            <path class="curtain-svg__curve curtain-svg__curve_top-desktop" d="M0,300 C305.333333,100 625.333333,0 960,0 C1294.66667,0 1614.66667,100 1920,300 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,300 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_top-mobile" d="M0,150 C305.333333,50 625.333333,0 960,0 C1294.66667,0 1614.66667,50 1920,150 L1920,1080 C1614.66667,1080 1294.66667,1080 960,1080 C625.333333,1080 305.333333,1080 0,1080 L0,150 Z"></path>
            <!-- - Curve Top -->
            <!-- Curve Bottom -->
            <path class="curtain-svg__curve curtain-svg__curve_bottom-desktop" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,980 1294.66667,930 960,930 C625.333333,930 305.333333,980 0,1080 L0,0 Z"></path>
            <path class="curtain-svg__curve curtain-svg__curve_bottom-mobile" d="M0,0 C305.333333,0 625.333333,0 960,0 C1294.66667,0 1614.66667,0 1920,0 L1920,1080 C1614.66667,1030 1294.66667,1005 960,1005 C625.333333,1005 305.333333,1030 0,1080 L0,0 Z"></path>
            <!-- - Curve Bottom -->
          </svg>
        </div>
      </div>
      <!-- - header curtain AJAX transition -->
      <!-- - TRANSITION CURTAINS -->
      <!-- Cursor Follower-->
      <div class="cursor" id="js-cursor">
        <div class="cursor__wrapper">
          <!-- circles -->
          <div class="cursor__follower">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <circle id="inner" cx="25" cy="25" r="24" style="opacity: 0.6;"></circle>
              <circle id="outer" cx="25" cy="25" r="24" style="stroke-dashoffset: 252.327; stroke-dasharray: 0px, 999999px;"></circle>
            </svg>
          </div>
          <!-- - circles -->
          <!-- arrows -->
          <div class="cursor__arrows">
            <div class="cursor__arrow cursor__arrow_up material-icons">keyboard_arrow_up</div>
            <div class="cursor__arrow cursor__arrow_down material-icons">keyboard_arrow_down</div>
            <div class="cursor__arrow cursor__arrow_left material-icons">keyboard_arrow_left</div>
            <div class="cursor__arrow cursor__arrow_right material-icons">keyboard_arrow_right</div>
          </div>
          <!-- - arrows -->
          <!-- label holder -->
          <div class="cursor__label"></div>
          <!-- - label holder -->
          <!-- icon holder -->
          <div class="cursor__icon material-icons"></div>
          <!-- - icon holder -->
        </div>
      </div>
      <!-- - Cursor Follower-->
      @include('client.includes.sidebar')
      <!-- - PAGE HEADER -->
      <!-- PAGE MAIN -->
      <div class="js-smooth-scroll bg-light-1" id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD -->
          <section class="section section-masthead pt-small pb-small text-center" data-arts-os-animation="data-arts-os-animation" data-background-color="var(--color-light-1)">
            <div class="section-masthead__inner container-fluid" >
          
            <header class="row section-masthead__header justify-content-center mt-5">
                <div class="col">
                 
                  <div class="w-100"></div>
                  <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                  <h2 class="h1 mt-0 mb-0" > Credit Education</h2>

                  <h3 class=" mt-0 mb-0" > Identity & Safety</h3>

                  </div>
                  <div class="w-100"></div>
                  <div class="section__headline mt-2 mx-auto"></div>
                </div>
              </header>
            </div>
           
          </section>

          <section class="section section-blog pb-medium">
            <div class="container">
              <div class="row justify-content-center">
                <!-- post content -->
                <div class="col-lg-10 section-blog__post">
                  <article class="post">
                    <!-- post content -->
                    <div class="post__content clearfix">

               
                    <p >

<h4> Fraud Victim Checklist </h4>
In 2015, 13.1 million Americans were identity fraud victims?. That's a new victim every two seconds. Education is critical to fast recovery. Once you realize that you are a victim of fraud, you'll want to act quickly to minimize potential damage. We recommend you start by contacting necessary government, banking and credit agencies to ensure they're aware of the crime and to put a stop to any ongoing theft.
Review the following tips and procedures to help resolve any issues with your creditors, remove inaccurate information from your credit report and prevent further fraud.
<br>
<h4>Protect your credit report immediately </h4>
<ol>
<li>Add a Fraud Alert to your credit report to warn potential credit grantors that
you may be a victim of identity theft — online, right now.
</li>
<li>Consider placing a Security Freeze on your TransUnion Credit Report.
</li>

<li>Placing a security freeze on your credit report will
stop lenders and others from accessing your TransUnion Credit Report entirely, 
which will prevent them from extending credit. You can do this online, right now.
</li>

</ol>
<h4>Obtain and review a copy of your credit report</h4>
<ol>
<li>Review your TransUnion Credit Report and check for any unauthorized activity. Should suspicious activity show up on your report, contact the creditors and question the account and/or inquiry. Also,
take full advantage of your credit monitoring solution, as well as any features that allow you to lock your report long-term.
</li>
<li>	If you have questions, contact us and/or the other major credit reporting companies, Equifax and Experian.
</li>


</ol>
<h4>Report fraud to the authorities</h4>
<ol>
<li>Contact government agencies, such as the Federal Trade Commission (FTC), to report fraudulent activity. You should also contact your local law enforcement agency to file a report. Download the FTC's Universal Fraud Affidavit.
</li>
<li>Contact your credit grantors and financial institutions.</li>
<li>Connect with companies with whom you have financial relationships and inform them that your accounts may be compromised. Banks and credit card companies may issue new cards and PINs to protect your assets, and will work to identify and rectify any unauthorized charges.
</li>
<li>Contact any companies on your credit report that you do not recognize. Verify the information they have in their records for the reported item.
</li>
<li>Provide the companies with a copy of your police report, notarized FTC Affidavit and other relevant documentation.
</li>
<li>Keep a log of all related phone conversations, including the names of people with whom you speak.
</li>

</ol>
<h4>Follow-up is key</h4>
<ol>
<li>Stay in touch with the companies and agencies you have contacted to ensure that their investigations resulted in your favor. TransUnion's FVAD will assist, but remember that as a victim, you are ultimately responsible for working with credit grantors to remediate fraudulent accounts.
</li>
<li>Periodically review your credit report. Check for any new fraudulent activity. Consider using features such as TransUnion Credit Lock, for ongoing protection.
</li>
</ol>
<h4>Spotting Identity Theft Signs </h4>
Knowing identity theft signs can help you protect yourself from this crime. While identity theft is always difficult, if it's caught early, you can minimize its damage to your reputation and financial health. Unfortunately, some people don't realize that their credit, medical or even criminal records contain inaccuracies caused by the activity of identity thieves. Credit identity thieves use your personal information to apply for credit in your name, leaving you to deal with angry creditors and collectors.
<br>

<h4>
Here Are Some Common Indicators of Identity Theft:</h4>

<ol>
<li>	Unfamiliar activity on your credit reports: Regularly monitor your credit reports to look for new and unfamiliar accounts. If you see that unauthorized or unfamiliar activity has occurred, contact the credit bureau that issued the report right away.
</li><li>	Unexpected charges on your credit or bank account statements: Don't toss your bank and credit card statements without reviewing them. Review each charge and call your bank or credit card company to question any purchase that you don't recall making.
</li><li>	Letters or phone calls from unfamiliar creditors or bill collectors: If you start getting phone calls and letters from unknown creditors or bill collectors, take action. An identity thief has likely used your identity to open accounts and make purchases, leaving you with the bills. Children and the elderly can also be targets of identity thieves that operate in this way, so look out for similar communications to your children or to relatives in your care.
</li><li>	Inability to access online accounts: If you suddenly can't access bank or credit card account websites, contact your financial institutions immediately by phone. Someone may have stolen your passwords in an attempt to take over your accounts.
</li>
</ol>

If you notice these identity theft signs, contact your local law enforcement agency and file a report. You should also notify credit bureaus, credit card companies and banks to inform them about your situation, reverse any charges and remove inaccurate information. As a precaution, you may also want to place a fraud alert or security freeze on your credit reports, which provides you with additional layers of protection against an identity thief.
<br> <br>
<b> The Difference Between a Fraud Alert and a Credit Freeze (also known as a Security Freeze) </b> <br>
<h4> Fraud Alert </h4>
A Fraud Alert is a cautionary flag, which is placed on your credit file to notify lenders and others that they should take special precautions to verify your identity before extending credit. When you place a Fraud Alert, you can provide a mobile or other phone number for lenders to contact you to verify that the party applying for credit is actually you, not a fraudster.
<br>
When you place a Fraud Alert on your credit report with any one of the three major credit reporting companies, that company will notify the other two and fraud alerts will also be placed on those files as well. An Initial Fraud alert lasts for 90 days and may be renewed. Fraud Alerts are available at no charge to consumers who believe they may be victims of identity theft.
<br>

<h4> Security Freeze (also known as Credit Freeze) </h4>
A Security Freeze is a more dramatic step in protecting your credit. Placing a Security Freeze will prevent lenders and others from accessing your credit report entirely, which will prevent them from extending credit. With a Security Freeze in place, you will need to take special steps when you wish to apply for any type of credit.
<br>
Because of more stringent security features, you will need to place a Security Freeze separately with each of the three major credit reporting companies if you want the freeze on all of your credit files. A Security Freeze remains on your credit file until you remove it or choose to lift it temporarily when applying for credit or credit-dependent services
<br>

<h4> Five Powerful Ways to Protect Against Identity Theft </h4>
Identity theft has become a prominent-enough problem that most people know they need to protect against it. The question is: how? Unfortunately there is no foolproof plan that can completely guarantee the safety of your identity. However, there are steps individuals can take. Here are five great precautions to help guard against identity thieves:
<ol>
<li>Protect your Social Security Number (SSN) like a Mama Bear.
Your SSN is "Need to Know" information. This means that you only give it out when ABSOLUTELY necessary. In addition, use your common sense. If the party asking for your SSN seems untrustworthy or if it doesn't seem like they should need to know this information, then don't give it out.
</li> <li>	When it comes to online passwords, randomness is the key.
In a perfect world, we could all just use our mother's maiden name or high school mascot as a universal password for everything. Unfortunately, we live in an imperfect world. In today's society, thieves can easily find out this type of personal information. According to the Federal Trade Commission, a good rule of thumb is to keep it to an as-random-as-possible mix of letters, number and symbols. That way, it will be more difficult to crack.
</li> <li>		Keep an eye on your credit card accounts.
No, you don't need to memorize every purchase or know exactly what your balance is at all times. However, you should be able to look at your credit card statement and account for every purchase. If something seems incorrect, immediately contact the issuer. Better to be on the safe side.
</li> <li>		Stay on top of your credit.
Make sure your credit reports show accurate information. Signing up for a credit monitoring service is a great way to receive alerts regarding any credit report changes. Handle it similarly to how you analyze your credit card statement: if you notice any inaccurate or unfamiliar information in your credit report, you should contact the creditor or file a dispute with all three major credit bureaus (TransUnion, Equifax, Experian).
</li> <li>		Don't carry every important document in your wallet/purse.
Although your wallet/purse may seem like a convenient and secure place to keep your Social Security card, birth certificate, or passport, doing so is a good way to misplace or even lose these valuable items. This information may be as good as gold to identity thieves.
Identity theft can take years to overcome. Developing good habits in protecting your personal information will go a long way toward lowering the risk you'll have to undergo a lot of unnecessary stress and hassle. You can help achieve peace of mind by putting the above five steps into practice, starting today.
</li> </ol>	

<h4> Keep Your Credit Safe While Traveling</h4>
Whether you're planning a trip to Las Vegas or Venice, including a few financial arrangements in your preparations will help keep your credit reports safe — and your mind free of worries — while you are away:
<ol>
<li>	Guard against mix-ups. Call your credit card issuers to notify them before you leave on a vacation, especially if you are traveling outside the U.S. If your banks and card issuers know that you are traveling, they are less likely to mistakenly block your access to the account when charges from unusual locations appear.
</li> <li>	Make photocopies of important documents. Having copies of your credit cards, driver's licenses and passports will make the replacement process much faster if you lose something important while traveling. Add a list of emergency contacts to this folder including the phone numbers of your doctor, banks and family members. Leave a set of these documents at home with a friend and store one in a separate piece of luggage.
</li> <li>	Avoid late payments. Plan ahead so you won't miss any bill payments while you are away. Online bill payment systems make it easy to schedule a payment in advance. A little preparation can help you avoid expensive late charges and unnecessary damage to your credit.
</li> <li>	Keep an eye on your identity. Guard against fraud by asking the Post Office to put a vacation hold on your mail and be careful where you use your credit card. Check the activity on your financial statements and your credit report(s) closely when you return, to make sure they are accurate.
</li> </ol>
</p>

                     
                    </div>
                    <!-- - post content-->
                    <!-- post tags -->
                    
                    
                  </article>
                </div>
                <!-- - post content -->
              </div>
            </div>
          </section>
        </main>
        @include('client.includes.footer')
            </div>
      <!-- - PAGE MAIN -->
    </div>
    <canvas id="js-webgl"></canvas>
    <!-- PhotoSwipe -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true" data-arts-theme-text="light">
      <!-- background -->
      <div class="pswp__bg"></div>
      <!-- - background -->
      <!-- slider wrapper -->
      <div class="pswp__scroll-wrap">
        <!-- slides holder (don't modify)-->
        <div class="pswp__container">
          <div class="pswp__item">
            <div class="pswp__img pswp__img--placeholder"></div>
          </div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <!-- - slides holder (don't modify)-->
        <!-- UI -->
        <div class="pswp__ui pswp__ui--hidden">
          <!-- top bar -->
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.2" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen" data-arts-cursor="data-arts-cursor" data-arts-cursor-scale="1.2" data-arts-cursor-magnetic="data-arts-cursor-magnetic" data-arts-cursor-hide-native="true"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- - top bar -->
          <!-- left arrow -->
          <div class="pswp__button pswp__button--arrow--left">
            <div class="arrow arrow-left js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
              <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
              </svg>
              <div class="arrow__pointer arrow-left__pointer"></div>
              <div class="arrow__triangle"></div>
            </div>
          </div>
          <!-- - left arrow -->
          <!-- right arrow -->
          <div class="pswp__button pswp__button--arrow--right">
            <div class="arrow arrow-right js-arrow" data-arts-cursor="data-arts-cursor" data-arts-cursor-hide-native="true" data-arts-cursor-scale="0" data-arts-cursor-magnetic="data-arts-cursor-magnetic">
              <svg class="svg-circle" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <circle class="circle" cx="30" cy="30" r="29" fill="none"></circle>
              </svg>
              <div class="arrow__pointer arrow-right__pointer"></div>
              <div class="arrow__triangle"></div>
            </div>
          </div>
          <!-- - right arrow -->
          <!-- slide caption holder (don't modify) -->
          <div class="pswp__caption">
            <div class="pswp__caption__center text-center"></div>
          </div>
          <!-- - slide caption holder (don't modify) -->
        </div>
        <!-- - UI -->
      </div>
      <!-- slider wrapper -->
    </div>
    <!-- - PhotoSwipe -->
    <!-- List Hover Shaders -->
    <script id="list-hover-vs" type="x-shader/x-vertex">
      uniform vec2 uOffset;
      
      varying vec2 vUv;
      
      vec3 deformationCurve(vec3 position, vec2 uv, vec2 offset) {
        float M_PI = 3.1415926535897932384626433832795;
        position.x = position.x + (sin(uv.y * M_PI) * offset.x);
        position.y = position.y + (sin(uv.x * M_PI) * offset.y);
        return position;
      }
      
      void main() {
        vUv =  uv + (uOffset * 2.);
        vec3 newPosition = position;
        newPosition = deformationCurve(position,uv,uOffset);
        gl_Position = projectionMatrix * modelViewMatrix * vec4( newPosition, 1.0 );
      }
    </script>
    <script id="list-hover-fs" type="x-shader/x-fragment">
      uniform sampler2D uTexture;
      uniform float uAlpha;
      uniform float uScale;
      
      varying vec2 vUv;
      
      vec2 scaleUV(vec2 uv,float scale) {
        float center = 0.5;
        return ((uv - center) * scale) + center;
      }
      
      void main() {
        vec3 color = texture2D(uTexture,scaleUV(vUv,uScale)).rgb;
        gl_FragColor = vec4(color,uAlpha);
      }
      
    </script>
    <!-- - List Hover Shaders -->
    <!-- Slider Textures Shaders -->
    <script id="slider-textures-vs" type="x-shader/x-vertex">
      varying vec2 vUv;
      void main() {
        vUv = uv;
        gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
      }
    </script>
    <script id="slider-textures-horizontal-fs" type="x-shader/x-fragment">
      varying vec2 vUv;
      
      uniform sampler2D texture;
      uniform sampler2D texture2;
      uniform sampler2D disp;
      
      uniform float dispFactor;
      uniform float effectFactor;
      
      void main() {
      
        vec2 uv = vUv;
      
        vec4 disp = texture2D(disp, uv);
      
        vec2 distortedPosition = vec2(uv.x + dispFactor * (disp.r*effectFactor), uv.y);
        vec2 distortedPosition2 = vec2(uv.x - (1.0 - dispFactor) * (disp.r*effectFactor), uv.y);
      
        vec4 _texture = texture2D(texture, distortedPosition);
        vec4 _texture2 = texture2D(texture2, distortedPosition2);
      
        vec4 finalTexture = mix(_texture, _texture2, dispFactor);
      
        gl_FragColor = finalTexture;
      
      }
    </script>
    <script id="slider-textures-vertical-fs" type="x-shader/x-fragment">
      varying vec2 vUv;
      
      uniform sampler2D texture;
      uniform sampler2D texture2;
      uniform sampler2D disp;
      
      uniform float dispFactor;
      uniform float effectFactor;
      
      void main() {
      
        vec2 uv = vUv;
      
        vec4 disp = texture2D(disp, uv);
      
        vec2 distortedPosition = vec2(uv.x, uv.y - dispFactor * (disp.r*effectFactor));
        vec2 distortedPosition2 = vec2(uv.x, uv.y + (1.0 - dispFactor) * (disp.r*effectFactor));
      
        vec4 _texture = texture2D(texture, distortedPosition);
        vec4 _texture2 = texture2D(texture2, distortedPosition2);
      
        vec4 finalTexture = mix(_texture, _texture2, dispFactor);
      
        gl_FragColor = finalTexture;
      
      }
      
    </script>
<!-- - Slider Textures Shaders -->
    <!-- VENDOR SCRIPTS -->
    <script src="{{asset('public/assets1/js/vendor.js')}}"></script>
    <!-- - VENDOR SCRIPTS -->
    <!-- COMPONENTS -->
    <script src="{{asset('public/assets1/js/components.js')}}"></script>
    <!-- - COMPONENTS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwR_TrF6h7-pMxkKv_q2t8BXX3w6QuFOc" async></script>
  </body>
 

<!-- Mirrored from artemsemkin.com/rhye/html/page-inner-about-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Aug 2021 09:42:59 GMT -->
</html>