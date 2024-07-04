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
      <!-- - PAGE HEADER -->
      <!-- PAGE MAIN -->
      <div class="js-smooth-scroll bg-light-1" id="page-wrapper" data-barba="container">
        <main class="page-wrapper__content">
          <!-- section MASTHEAD -->
          <section class="section section-masthead pt-large pb-medium text-center" data-arts-os-animation="data-arts-os-animation" data-background-color="var(--color-light-1)">
            <div class="section-masthead__inner container-fluid">
            
            <header class="row section-masthead__header justify-content-center mt-5">
                <div class="col">
                 
                  <div class="w-100"></div>
                  <div class="section-masthead__heading split-text js-split-text" data-split-text-type="lines,words" data-split-text-set="words">
                  <h2 class="h1 mt-0 mb-0" > Credit Education</h2>

                  <h3 class=" mt-0 mb-0" > CREDIT Basics</h3>

                  </div>
                  <div class="w-100"></div>
                  <div class="section__headline mt-2 mx-auto"></div>
                </div>
              </header>
            </div>
          </section>
          <!-- - section MASTHEAD -->
          <!-- section BLOG LIST SIDEBAR -->
          <section class="section section-blog pb-medium">
            <div class="container">
              <div class="row justify-content-between">
              <div class="col-lg-8 section-blog__posts">
              <article class="post">
                    <!-- post content -->
                    <div class="post__content clearfix">

                         <p class="has-drop-cap">

                      C <br> redit Report Information 101
The credit reporting bureaus — TransUnion, Equifax and Experian — are the three major 
companies that maintain credit reports. The reporting companies issue credit reports to
 creditors, insurers and others as permitted under law for the purposes of evaluating your financial responsibility. <br/>
 <b> Here is an example of how the system works: </b>
<ol>
<li>	Apply for a Credit Card  
When you apply for a new credit card, the creditor requests a copy of your financial history, 
or credit report, from one or more of the credit reporting companies. </li>
<li>	The Creditor's Assessment 
The creditor may use your credit report, a score, 
and other information you provide (such as income or debt information) 
to determine whether to approve your application and what rates to offer. </li>
<li>The Creditor's Decision
If you are issued a card, the creditor reports that account to 
the credit reporting companies, and then updates it, including your
 balance and payment activity, about every 30 days. </li>
<li>	Your Credit Profile Updated
The credit reporting companies update your credit report as they
 receive new information from creditors and lenders. Your credit 
 profile changes based on your financial activity. The next time you apply for a credit card or loan,
  the process repeats.  </li>
</ol>

<h4 >Managing Your Credit Report </h4>
Your report is divided into six main sections. When you open a new account, miss a payment or move, 
these sections are updated with new information. These sections are:
    <ol>
        <li>Identifying Information<br>
(name, address, birth date and Social Security number) </li>

<li>	Employment </li>
<li>	Consumer Statement</li>
<li>	Account Information </li>
<li>	Public Records</li>
<li>	Inquiries</li>
</ol>

<h4> Negative records </h4>
Late payments create a negative record. Generally, negative records will stay
 on your report for up to 7 years (up to 10 years for certain bankruptcy information).
  Positive records can remain on your credit report longer. <br>

<h4> Your Credit Report is updated in most cases every 30 days </h4>
Your credit report is updated with new information reported by your creditors.
 Most creditors report new information approximately every 30 days, to reflect your account balances and payments you make. <br>

<h4>  Check every 6-12 months </h4>
Not all creditors report to all three companies; the companies obtain their data independently,
 so your credit reports from TransUnion, Equifax and Experian could substantially differ.
  That's why it's important to check your three credit reports every 6-12 months to ensure 
  that the information is accurate and up-to-date. <br>

<h4> Correcting inaccuracies</h4>
Under the Fair Credit Reporting Act, consumers are protected if there 
is inaccurate information on their credit reports. If you find inaccurate 
information on your credit reports, you can contact the associated creditor
 or lender directly. You can also dispute the inaccuracy with the credit reporting companies. <br>

<h4 id="one"> Know the system </h4>
Managing your credit and maintaining a good credit history can lead to better
 rates on major purchases. We recommend that you check your credit reports every 
 6-12 months, or at least 3 months before a major purchase, in order to identify 
 potential inaccuracies and any signs of identity theft. <br>
Routine check-ups, along with paying your bills on time,
 keeping your credit card balances below 35% of their limits,
   and correcting any inaccuracies will help ensure your credit reports are viewed in the most favorable light. <br>
<h4 > Credit Score Recipe </h4>
<b>What goes into my credit score? </b> <br>
Have you ever wondered how your credit score is calculated, how something as complex as 
an individual's credit history is represented by a simple three-digit number? <br>
It's a great question and something worth further explanation. <br>
The credit scoring system became prevalent during the 1980's as a way for lenders 
to quickly evaluate a potential borrower's creditworthiness. Now credit scoring is 
used by lenders, landlords, and utility companies to evaluate your credit behavior. <br>
Here's an easy way to think about credit scores: they're like pies. Similar to 
a recipe for a pie, the recipe for a credit score calls for the blending together
 of numerous ingredients to form a resulting product. Tastier pies have better ingredients. So do more palatable scores. <br>

<h4>So what are those ingredients, anyway? </h4>
Using VantageScore® 3.0 as an example, let's look at 5 of the main ingredients that factor into your credit score: <br>
<b> Payment History. </b> 
Let's face it, if someone has a consistent history of making payments on time, they should probably be perceived as less of a risk than someone with the same exact credit profile who only has an intermittent history of on-time payments.
<br> <b> Outstanding Debt. </b>
 This is the amount owed. Reducing Outstanding Debt is always in the best interest of your credit health.
 <br><b> Utilization. </b>  Utilization measures the amount of available credit one is using. VantageScore® Credit Score recommends keeping balances below 30% of credit limit.
 <br><b> Credit Type & History.</b>  History again? Yep, all else equal, someone with a longer and diversified credit history is typically seen as a less risky borrower. This fact reinforces the importance of establishing a solid foundation of good credit as early as possible.
 <br><b> Recent Inquiries. </b>  Each time someone authorizes a lender or business to make an official inquiry of his/her credit in connection with seeking credit, the score typically drop a little bit. It is important to apply for credit in moderation.
<h4 id="two">What does this all mean? </h4>
Good credit scores and delicious apple pies have this in common: quality ingredients.
 So whether you're borrowing or baking, what matters is what you put into it. <br>
When you are preparing for a major purchase make sure you check your credit 
scores and credit reports from all three credit reporting agencies: TransUnion,
 Equifax and Experian. Looking at your scores and reports a few months before your 
 loan application will help you get a complete picture of your credit health. <br>

<h4> Credit Myths and Misconceptions </h4>
Credit myths and misconceptions are plentiful. 
Don't let incorrect information influence your credit behavior. Some of the most common credit myths are: <br>
<h4> score drops if you check your own credit. </h4>
This widespread credit misconception fools a lot of people, but viewing your own report and score
 is counted as a "soft inquiry" and doesn't change the score one way or another. "Hard inquiries" 
 by a lender or creditor, such as those resulting from your applying for credit, may slightly lower
  your credit score. If you're shopping for a loan and concerned about harm to your score, 
  know that multiple loan inquiries within a period of a few weeks are usually treated as 
   single inquiry to minimize impact. </br>

  <h4>  It helps to close old accounts. </h4>
This credit myth advocates closing old and inactive accounts to hike up your score.
 However, this might inadvertently have the opposite affect and lower your credit 
 score because now the credit history appears shorter. If you don't trust yourself 
 to put a card away in a safe place and not use it, then consider canceling newer accounts. <br>

<h4>Paying off a negative record means it's taken off your credit report. </h4>
Generally, negative records, such as collection accounts and late payments,
 will remain on your credit reports for up to seven years from the date of 
 first delinquency. Paying off the account sooner doesn't mean it's deleted 
 from your credit report; instead it's listed as "paid." Of course, it's smart
  to pay your debts, both to reduce the total amount of debt you owe and to 
  show your willingness to repay your obligations, but expect the negative
   record to have some effect until it is purged from your report. <br>
<h4>Co-signing doesn't mean you're responsible for the account. </h4>
Regardless of this credit myth, if you open an account jointly or co-sign 
a loan, you will be held legally responsible for the account. Activity on
 the joint account is displayed on the credit reports of both account holders. 
 If you co-sign for a friend's auto loan and that person doesn't make the payments,
  your credit profile will be hurt and vice versa. The only way to end the dual
   liability is to have one party refinance the loan, or persuade the creditor to formally take you off the account. <br>
<h4 id="three"> Paying off a debt boosts your score by 50 points. </h4>
Contrary to this credit myth, credit reporting agencies companies determine your credit score via a complex algorithm that uses hundreds of factors and values to calculate it. It's almost impossible to calculate the difference in points changing one factor might make. It's wise to pay your bills on time, work to lower your debts and ask that any inaccuracies be corrected. A proven record of sound financial behavior and time will have the most significant impact on your score.
<br>
<h4 id="three"> Learn How to Get Credit </h4>
<b> Wondering how to get credit? </b> <br>
If you've never had a credit card, an auto loan, or even a cell phone in your name, then you probably 
have very little credit history. Having little or no credit history can make it difficult to get a loan. 
In your case, the lender has little information for predicting how likely it is that you will repay your debt. <br>

Fortunately, establishing credit is something you can work on over time. There are some steps that may
 help when you're trying to establish a credit history. <br>
<h4> Establishing a new credit file takes time and patience </h4>
This isn't something that you can do overnight, and despite what you might think,
 there are no shortcuts to establishing good credit. Take your time and be patient.
  Avoid making applications with places that are likely to turn you down the first time.
   Each time you make a credit application, it results in a hard inquiry. If potential 
   creditors see numerous hard inquiries on your file, it could have a negative impact on results of future applications. <br>
The important thing to remember when you are establishing your credit is to be patient and take your time.
 Make sure that when you do receive credit, whether it's a loan, credit card or even utility bills, you pay them on time. <br>
This information is for educational purposes only and does not constitute legal or financial advice. You should always seek the advice of a legal or financial professional before making legal or financial decisions.
<br>
<h4 id="four"> Tips for Raising Your Credit Score </h4>
Self-improvement is a wonderful thing. Becoming a better public speaker can earn you 
confidence and a promotion. Going to the gym regularly can help you lose those extra pounds.
 And improving your credit score can save you hundreds or even thousands of dollars on life's
  big purchases. Improving your credit is not hard to do. It just takes time and a little knowledge 
  about the credit scoring system. <br>
While each person's individual credit profile is different and can be improved in different ways, 
there are five basic things that everyone can do to give their credit score a boost: <br>
 <b> 	Be punctual —  </b>Pay all your bills on time each month. Late payments, collections, and bankruptcies have a negative effect on your credit scores.
<br><b> 	Check your credit report regularly and take the necessary steps to remove inaccuracies — </b> Don't let your credit health suffer due to inaccurate information. If you find an inaccuracy on your credit report, contact the creditor associated with the account, or the credit reporting agencies to have it corrected.
<br> <b> 	Manage your debts — </b> Keep your credit card account balances below 35% of your available credit limits. For instance, if you have a credit card with a $1,000 limit, you should try to keep the balance owed below $350.
<br> <b> 	Give yourself time —  </b>Time is one of the most significant factors that can improve your credit score. Establish a long history of paying your bills on time and using credit responsibly. You may also want to keep the oldest account on your credit report open in order to lengthen your period of active credit use.
<br> <b> 	Avoid excessive hard inquiries —  </b>A large number of hard inquiries may be interpreted as a sign that you are opening numerous credit accounts due to financial difficulties, or overextending yourself by taking on more debt than you can easily repay. Apply for new credit in moderation.
<br>
<h4 id="five">  Credit Report Expiration Guide </h4>
Late payments, tax liens, bankruptcies…Are you anxiously waiting for old records to be removed from your credit report? Take the initiative to check the expiration dates on records in your report. For example, if you discover an obsolete bankruptcy from 2001 on your credit report, having it changed can boost your credit score. Check out the following expiration guide to kick your credit management into gear:
<br>
<h4>  Bankruptcy </h4>
Chapter 7, 11, and 13 bankruptcies remain on your credit report for 7-10 years after the filing date. When you file for bankruptcy, all the accounts included should be marked as "Included in BK" and will each stay on your report for a period of 7-10 years.
<br>
<h4> 
Charge-off accounts </h4>
If your delinquent account is charged-off, the record will stay on your credit report for 7 years.

<br>
<h4> 
    Closed accounts </h4>
If the account has delinquencies, those marks will stay on your credit report for 7 years from the date they were reported. Positive closed accounts (with no delinquencies or late payments) can remain on your credit report for longer than 7 years.
<br>
<h4> Collection accounts </h4>
Accounts sent to collections will remain on your credit report for 7 years from the date of the last 180-day late payment on the original account. The record will be marked as "paid collection" on your report when you pay the full balance. If you settle with the collections agency for a reduced amount, be aware your record will state the account as "paid for less than the total due."
<br>
<h4> Inquiries</h4>
When a creditor or lender checks your credit it causes a "hard inquiry" to be listed on your credit report. These hard inquiries stay on your report for up to two years, and they can cause a slight drop in your credit score if there are too many of them. When your credit is checked by an employer or when you check your own credit online, you may see a harmless "soft inquiry" on your credit report. Soft inquiries do not cause a drop in your credit score and do not appear when a business checks your credit.
<br>
<h4> Judgments</h4>
Most judgments, including small claims, civil and child support, will remain on your credit report for 7 years from the filing date.
<br>
<h4> Late payments</h4>
If you are late with a payment, the 30 -180 day delinquency can stay on your credit report for 7 years.
<br>
<h4> Tax Liens</h4>
City, county, state and federal tax liens are especially harmful and can remain on your credit report indefinitely if unpaid. Once the lien is paid the record will remain on your credit report for 7 years from the payment date.

<br>
<h4 id="six">All About Credit Inquiries </h4>
We all have them. Many of us aren't sure where they came from, or how long they are staying. No, we're not talking about the in-laws! We're talking about inquiries on our credit reports. Inquiries are one of the most confusing and least understood aspects of the credit reporting system. Here's the skinny on inquiries and how you can manage them:
<br>
<h4>What are inquiries? </h4>
An inquiry is a record of someone checking your credit information. Inquiries come in two distinct categories: "hard inquiries" that occur when a business views your credit report for the purpose of an application for credit and "soft inquiries" that occur when your credit is checked for other reasons or when you check your credit. If you apply for a new credit card, a hard inquiry record will appear on your credit report and may cause a temporary drop in your credit score. When you check your own credit report, or when it is checked for a pre-approved marketing purpose or for account management, it is considered a soft inquiry and will not harm your credit score.
<br>
<h4> Will checking my own credit harm my score? </h4>
Checking your own credit data will not harm your credit score. You can check your credit and review your data without worrying about causing any damage to your score.
<br>
<h4>  Why are inquiries recorded? </h4> 
Hard inquiries are recorded so that potential creditors and lenders can view how often you have applied for new credit. Potential creditors may think you are trying to spend beyond your means if there are too many hard inquiries on your credit report. You can still shop around for a loan; multiple inquiries for the same purpose in a short amount of time are commonly grouped into one less harmful inquiry session. Inquiries are also helpful for consumers because they can notify you of a potential identity thief applying for accounts in your name.
<br>
<h4> How long do they last? </h4>
Most hard inquiries remain on your credit report for two years from the original placement. All inquiries must stay on your credit report for at least a year. You are allowed to dispute inquiries on your credit report, but it can be difficult to prove that the inquiry is indeed inaccurate. If you are unsure of where an inquiry came from, try contacting the financial institution listed before sending off a letter of dispute.

<br>

                      </p>
                     
                    </div>
                    <!-- - post content-->
                    <!-- post tags -->
                    
                    
                  </article>
</div>
                <!-- sidebar -->
                <div class="col-lg-3 section-blog__sidebar">
                  <aside class="sidebar sidebar_no-margin-last-widget widget-area">
                    <!-- widget SEARCH -->
                   
                    <!-- - widget SEARCH -->
                    <!-- widget CATEGORIES LIST -->
                    <section class="widget widget_categories">
                      <!-- header -->
                      <h2 class="widgettitle">Categories</h2>
                      <!-- - header -->
                      <!-- content -->
                      <ul>
                        <li class="cat-item"><a href="#">Credit Report Information 101</a></li>
                        <li class="cat-item"><a href="#one">Credit Score Recipe</a></li>
                        <li class="cat-item"><a href="#two">Credit Myths and Misconceptions</a></li>
                        <li class="cat-item"><a href="#three">Learn How to Get Credit</a></li>
                        <li class="cat-item"><a href="#four">Tips for Raising Your Credit Score</a></li>
                        <li class="cat-item"><a href="#five">Credit Report Expiration Code</a></li>
                        <li class="cat-item"><a href="#six">All About Credit Inquires</a></li>
                       
                      </ul>
                      <!-- - content -->
                    </section>
                    <!-- - widget CATEGORIES LIST -->
                  
                    <!-- - widget RECENT POSTS -->
                  
                    <!-- - widget TAGS -->
                  </aside>
                </div>
                <!-- - sidebar -->
              </div>
            </div>
          </section>
          <!-- - section BLOG LIST SIDEBAR -->
        </main>
        <!-- PAGE FOOTER -->
        @include('client.includes.footer')
        <!-- - PAGE FOOTER -->
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
 

<!-- Mirrored from artemsemkin.com/rhye/html/blog-list-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Oct 2022 14:24:11 GMT -->
</html>