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

                  <h3 class=" mt-0 mb-0" > Life Events</h3>

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

                  
                    <p class="has-drop-cap">
                      <h4>    Wait... Student Debt Can Help Me? </h4>
Over the past few decades, the cost of attending college in the United States has skyrocketed. Not surprisingly, the use of student loans to help pay for this higher cost has also increased quite dramatically. This has left a large portion of the population, especially the Millennial generation, with a substantial amount of debt just as they are entering the workforce. This phenomenon may end up weighing on the U.S. economy for decades to come. However, on an individual level, might there be a silver lining for all of those student borrowers? The answer: potentially.
<br>  The fact is no one wants student debt, but if you have to take out a loan, it provides an opportunity to start recording a solid payment history. According to VantageScore™, student loans can positively impact your credit score because generic models, like the VantageScore® 3.0 credit score, "reward a history of on-time payments as it demonstrates the ability to manage credit."3
<br>  Here's an example. Let's say that Joe Student finished college with $30,000 in student debt. Let's also say Joe is paying this back over a ten-year period at a 5% interest rate. Roughly speaking, Joe will likely be making monthly payments of around $300. As long as Joe makes his payments on time, he is on his way to enhancing one of the most vital factors when it comes to a healthy credit score, a strong payment history.
<br>  Why is Joe's payment history potentially so important for his credit health? Because creditors look for borrowers who have shown a history of making consistent and timely payments. Should Joe choose to apply for a mortgage a few years down the road, Joe's history of paying back his student loans in a responsible manner may be useful when negotiating for more appealing terms.
<br>  Now, let's use that same scenario but say that Joe decided to ignore his scheduled repayment plan or never reached out to his student loan creditor to negotiate a more reasonable, income-based plan. Depending on how long Joe's neglect lasts, his silver-lining opportunity could turn into a negative situation for his credit health. Just as Joe could have built a strong history of consistent and timely payments, he has done the opposite in this scenario. He's built a history of inconsistent and unreliably-timed repayment.
<br>  In the end, carrying a load of student debt may weigh on your finances. However, student borrowers should also realize that borrowing presents an opportunity to establish a strong payment history. In the long run, student debt may pave the way for more manageable credit terms down the road.
<br>  This information is for educational purposes only and does not constitute legal or financial advice. You should always seek the advice of a legal or financial professional before making legal or financial decisions.
<br>   3A Lesson Plan to Understanding Credit Scores. New Haven, CT: VantageScore, 2012. Print.

<h4> Credit Cards and College Students — A Good Match? </h4>
You've seen the ads and been tempted by the giveaways — but how much do you really know about credit cards? Wading through offers to find a credit card that suits your student lifestyle can be tricky. If you know a little about how credit works and your options, you can start building your credit on the right foot. Here's a crash course in credit cards:
Credit Cards and College Students — A Good Match?
You've seen the ads and been tempted by the giveaways — but how much do you really know about credit cards? Wading through offers to find a credit card that suits your student lifestyle can be tricky. If you know a little about how credit works and your options, you can start building your credit on the right foot. Here's a crash course in credit cards:
Statistics — The Credit Card Act of 2009 slowed credit card use by college students by banning card approvals for anyone under 21 years old, unless they have an adult co-signer or can prove they have sufficient income to pay the bills. Yet according to a survey by student loan provider Sallie Mae, students still manage to accrue credit card debt. The average balance among college students in 2013 was $499. By grade level, sophomores carry the lowest average balance while freshmen and seniors carry the highest. Now that you know the credit stats, let's move on to some of the details.
Economics — Think you're ready for a credit card? Opening a credit account has its benefits: you'll have access to emergency funds, you can start building your credit and your purchases may be protected under some credit cards if damaged or stolen. It also has its dangers: you can easily rack up serious debt, interest rates can run high and you might damage your credit if not careful. Opening a credit account is only a good idea if you are sure you can use it responsibly.
Accounting — How can you find the card that is right for you? There are four major factors to take into consideration when looking at credit card offers:
<br> <b>  Statistics — </b>  The Credit Card Act of 2009 slowed credit card use by college students by banning card approvals for anyone under 21 years old, unless they have an adult co-signer or can prove they have sufficient income to pay the bills. Yet according to a survey by student loan provider Sallie Mae, students still manage to accrue credit card debt. The average balance among college students in 2013 was $499. By grade level, sophomores carry the lowest average balance while freshmen and seniors carry the highest. Now that you know the credit stats, let's move on to some of the details.
<br> <b> Economics —  </b> Think you're ready for a credit card? Opening a credit account has its benefits: you'll have access to emergency funds, you can start building your credit and your purchases may be protected under some credit cards if damaged or stolen. It also has its dangers: you can easily rack up serious debt, interest rates can run high and you might damage your credit if not careful. Opening a credit account is only a good idea if you are sure you can use it responsibly.
<br> <b> Accounting — </b>  How can you find the card that is right for you? There are four major factors to take into consideration when looking at credit card offers:
<ol>
  <li> <b>Card Type — </b> Credit cards come in all sorts of shapes and sizes. If you don't qualify for an ordinary credit card, investigate secured credit cards that use a savings account as collateral.
</li>  <li> <b>	Annual Percentage Rate (APR) —  </b>As a student your interest rates will probably range between 10-18% percent. This is higher than the rates an established borrower would receive but better than the rate for people with poor credit histories. Read the APR offer closely to see what the terms are for the introductory rate. The lower the rate, the less your credit spending will cost.
</li>  <li> <b>	Annual Fees —  </b> Most standard credit cards don't come with annual fees. ? Some premium or reward cards, such as airline mileage cards, charge annual fees. Look at the small print disclosure to see if your card has an annual fee. Also look for late fees, transaction fees and over-limit fees.
</li>  <li> <b>	Grace Period — </b>  The grace period on a credit card is the amount of time between when you make a purchase and when interest is applied to the purchase. For many cards, the interest-free grace period is around 25 days.
</li>
<li>
<b> History — </b> Once you start using your new card, it's a good idea to check your credit history to see if the account is being recorded correctly. Your credit reports from TransUnion, Equifax and Experian should
</li>

</ol>
<h4>Buying Your First Car: What You Need to Know </h4>
Buying your first car is considerably more expensive than the sticker price reveals. Prepare yourself for the unavoidable expenditures that come along for the ride.
<br>  Buying your first car? Congratulations! Before you plan your first road trip, though, there are several important financial factors to consider as you prepare to purchase this big ticket item.
<h4> Not just the sticker price </h4>
Buyer, beware. The sticker price posted on the window at any auto dealership, or even the listed price of a private sale, is actually considerably less than what you will need to pay to get your car on the road. Taxes and fees can vary depending upon the state in which you live, but there are some common threads that add up to unavoidable expenditures.
<br> You should be prepared to pay sales tax on the vehicle before you ever pull out of the dealership's parking lot. Your sales consultant will calculate this tax based upon the current rate in your state and will include it in your bottom line. The dealership will then submit the tax payment to the state government directly.
<h4> Taxes, taxes, taxes </h4>
Many states also assess an excise or personal property tax based on the book value of your vehicle. This tax is assessed and collected annually and is generally not included as part of the fee package charged by your dealership. Be prepared to receive this bill at a later date.
<h4> Registration, license plate and inspection fees </h4>
Speaking of your state government, it will also want to make sure your car has been safety inspected, is registered and easily identifiable — all at additional cost to you. Many dealerships, especially new car dealerships, will manage the trip to the Registry (or Department) of Motor Vehicles for you. You'll see your registration and license plate fees appear in the breakdown of charges on your invoice. Find out in advance if your dealership handles this end of the deal. Most states allow you a certain number of days within which the vehicle must be registered before penalties apply, so you'll need to plan ahead if you'll be completing this task yourself.
<br>Even if your new ride has just rolled off the assembly line, you may be required to have the vehicle inspected by a licensed garage. Most states require an annual inspection. The garage will inspect all the lights and other safety features, plus run an emissions test before stickering your car. Your inspection sticker is good for a year and also must be completed within a set period of time after purchase. For specifics in your state, check with your dealership.

<h4>Plan Financial Management Reviews at Each Life Stage </h4>
Do you wonder if you're doing the right things with your finances? Perhaps you don't know where to focus your attention. As we move through adulthood, we pass through several financial life stages and make budget, debt and investing choices. Understanding where you are and which financial management activities commonly occur at your life stage can help you meet your goals.
<h4>College</h4>
Young adults attending college often need time to adjust to being in charge of their own finances. Between applying for student loans and credit cards, and struggling with budgeting on a student income, college students may find it difficult to balance cash flow. Establish good credit habits, such as paying credit card bills on time, staying out of overdraft on bank accounts, and keeping your credit balances below their limits. It can take years to improve a negative credit history, so start strong and do your best to keep your credit healthy!
<h4>First Job</h4>
Graduating from college and entering the workforce brings new financial management challenges, such as making regular student loan payments. Once you are employed, you may want to apply for a car loan or increase your credit card limit. Now is also the time to start a savings program. As you earn promotions or raises, start contributing to short and long-term savings, especially an emergency fund. Continue to make all payments on time and review your credit file annually to verify the information is correct. In the near future, you may need a mortgage loan, and good credit could help qualify you for a lower interest rate.
<h4>Establishing a Home and Family</h4>
Marriage, children, and home ownership make this a busy life stage. Budgeting for household bills, loan payments, emergency savings, education savings, and retirement planning often requires careful financial management. Take time now to fine-tune financial plans. Inquire about life insurance to protect your family members from financial pressure should anything happen to you. As you apply for joint credit products, remember that you and your partner are equally responsible for repaying jointly borrowed money. Negative credit will affect both of your credit files.
<h4>Wealth-Building</h4>
If you have managed your credit responsibly to this point, your credit file and score may work in your favor. Continue to check your credit annually. A good credit score may help you get reduced interest rates on a mortgage refinance or limit increases. While your equity and savings grow, your debt and outstanding credit balances should be declining.

                    
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