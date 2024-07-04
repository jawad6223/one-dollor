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

                  <h3 class=" mt-0 mb-0" > Mange you Money</h3>

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

<h4> Money Mistakes: How to Rectify Past Financial Sins </h4>
Everyone makes mistakes, especially when it comes to money. Find out how you can set yourself on a better financial path by atoning for some of your worst money missteps.
<br>  Nobody's perfect — especially when it comes to managing money. While you may try to keep track of your funds, budget wisely and spend well now, you may have made some serious money mistakes when you were younger. Since having money doesn't exactly come with an owner's manual, you may have had lackadaisical spending ways or gone wild with credit before you smartened up and started taking money seriously. Still, those past sins can come back to haunt you in the form of creditors or less-than-impressive credit scores. Your best bet is to face money issues head-on and atone for those missteps so you can move forward with better habits.
<br>
<h4> Open up  </h4> 
When dealing with past financial mistakes, it's easy to turn a blind eye and hope that they simply go away. But when you owe money or default on loans, not only are those creditors still looking to get paid, it can affect your long-term ability to secure credit and enjoy future financial freedom. Instead, gather up all of your statements and go through them with a fine-tooth comb to give yourself a general picture of which mistakes you've made but can be easily rectified with dedicated work.
<br><h4> Make a plan  </h4> 
Once you know where you stand money-wise, it's time to create a plan to pay back creditors, and remove any inaccurate information on your credit report. This may require some leg work on your part, so plan on working with creditors on settlement deals, checking your credit report and contacting your creditors or credit reporting agencies to remove inaccuracies that you may have found. Consider your plan like you would a work project: focus, then put your energy into accomplishing it.
<br><h4> Start small  </h4> 
No one is saying that you need to put all of your savings toward paying off an old debt to get rid of it. In fact, starting with smaller debts — an old credit card or small tax bill, for instance - helps you get rid of some of your smaller mistakes, and can also help provide a sense of accomplishment. Start with the most manageable issues. That way, you'll have more of a leg to stand on when negotiating with larger creditors.
<br> <h4> Keep it rolling   </h4> 
Once you've made headway on some of your smaller money mistakes, it's time to get serious. Keep up the good work by taking a look at your current budget and cutting back spending to free up money for payment of other debts, or making settlement agreements with other creditors. When you have cash in hand, creditors may be more willing to settle, but you'll need to be prepared to act immediately. While it might mean a few months of leaner living, having a clear conscience and rectifying the mistakes of the past can help you move forward with your future financial goals.

<h4> Setting and Achieving Personal Goals  </h4> 
Trying to improve your finances? Not sure where to start? Whether your goals involve credit enhancing, refinancing, or saving, you can make this year a personal best for your credit. Read on for our top credit best pratices:
<br>

<h4> Set Goals: </h4> 
<ol>
<li>	Check your credit report every three months: The first step to robust credit health is to know which bad financial habits, such as late payments, are reflected in your credit report. Regular check-ups will also help you guard against identity theft.
</li><li>	Improve and raise your credit score above 650: A credit score above 650 may help qualify you for credit. The higher your score, the better the interest rates available to you.
</li><li>	Reduce your debt balances to below 35% of your available credit limit: Reducing your balances while maintaining active credit use makes you more appealing to prospective lenders and can help improve your credit score.
</li><li>	Create a monthly spending plan and stick to it: This simple commitment can help you start a savings plan and keep you from accruing unmanageable debt.
</li><h4> Update Your Records:</h4> 
<li>	Dispute inaccuracies on your credit report: Don't let your credit standing suffer because of inaccurate information.
</li> <li>	Most negative records expire from your credit report after 7-10 years. These accounts have a significant negative effect on your credit rating, so make sure they are removed from your report at the right time.
</li><li>	Consider refinancing: See if refinancing your home or car could save you money. Investigate your options with a lender.
</li> <h4> Plan Ahead:</h4> 
<li>	Start putting money into a savings account each month: No matter how much available credit you have, it can't beat cash in the bank. Setting aside a fixed amount each month will guarantee funds in the case of emergency while helping you develop financial discipline.
</li><li>	Contribute to your 401(k): See if your company offers matching funds and try to add the maximum amount allowable for your budget.
</li></ol>

<h4> Unpaid Medical Bills and Your Credit Report </h4>
Unpaid medical bills can cause surprising and serious damage to your credit report. <br>
It's often a plain and simple case of miscommunication. Your insurance company and your medical provider are in negotiations over paying a recent hospital bill. You think it has been paid, or at least should have been, because you have insurance. The bill is delinquent and then overdue and then sent to collections. All of the sudden you are stuck with a collections record on your credit report for 7 years. Not your fault? Think again.
</br> 
Medical collections are becoming increasingly common. If you are injured and your insurance company doesn't pay, you can become legally responsible for the bill. That collections account can stay on your credit report for up to seven years if you don't prove that it was a factual error. How can you be sure your credit doesn't end up with a scar? Follow these tips for keeping your credit out of harm's way:
<br>
<h4>Prevention </h4>
<b> Emergency reserve —  </b>It's important to have enough money saved to cover your living expenses for a few months in case you lose your job or unexpectedly land in the hospital. Medical bills can sometimes add up to unbelievable amounts, so you may want to also keep a credit card with a high limit reserved for emergency use.
<br><b>Be flexible — Flexible  </b>Spending Accounts or "Cafeteria Plans" offered through your employer provide an easy pre-tax way to pay for medical expenses. Ask your employer about what plan may be included in your benefits. With this system, you decide how much of your salary to set aside when you sign up for the year. For example, if you choose to pull out $100 a month for the plan, you have $1,200 you can use for medical bill reimbursements that year.
<br> <b> Power of attorney —  </b>If things get really sticky, having a trusted spouse or family member with legal power of attorney can help. When you are sick in the hospital, you may not be able to wrestle with the insurance companies and billing offices on your own. Talk to a financial planner or lawyer to have these papers drawn up. Be sure that this person understands the responsibilities and has a copy of your medical insurance policy.
<h4> Prescription </h4>
<b> Get the facts —  </b>If you receive a bill you thought was covered, go through your insurance policy with a fine tooth comb to see what you are really responsible for paying. These documents can also outline the best procedures for cutting through the red tape in the billing office. You'll also want to contact the insurance company and the medical office for more information as soon as you suspect something is wrong with your bill.
<br><b> Settle your bills — </b> Even if your insurance company is at fault, you will probably be better off paying the medical bill yourself before it's sent to collections rather than continuing to deny the charge. Paying the bill doesn't mean you have to stop negotiating with your insurance company over the amount, it just means that you won't also have to negotiate over a collection account on your credit report.

<h4>The Importance of Understanding Interest </h4>
It's one thing to know what interest is. It's another to truly understand how interest works. Understanding interest is so important because it can have a considerable impact on your entire financial picture.
<br>  The most important thing to know about interest is that not all types are created equal. The way you calculate interest can drastically alter the results. Taking that into account, let's discuss the two main types of interest:
<h4> 1. Simple or Nominal Interest </h4>
When you learned about interest in school, simple interest was probably the kind you were first taught. The amount of simple interest is calculated as a percentage of the principal amount. Put another way, with simple interest, the principal amount upon which the interest is calculated, is constant.
<br>    his is easy to understand when your think about a savings account. Say you deposit $10,000 with an annual interest rate of 5%. Now let's say you let that $10,000 sit there for 5 years. What would the new amount be? If you said $12,500, then you would be correct. Our deposit (the principal) earned $500 (5% of 10,000) each year for five years. That leaves us with $12,500.
<br>
<h4> 2. Compound Interest </h4>
Remember how with simple interest the amount upon which interest is calculated stayed the same (every year it was based on $10,000)? Well, with compound interest, that amount continues to accumulate on itself. Compound interest is calculated based on the principal amount and any past interest earned.1 The earned interest is simply added to the original principal amount at a predetermined rate (annually, monthly, etc.).
<br>  Compound interest might be better understood by example. Let's look back at our savings account scenario once again. This time, however, let's say at the end of each year your earned interest is added back to the original principal amount. After year 1, just like with simple interest, you would have earned $500 in interest. This time, though, the difference is that $500 is now added to the $10,000. So the following year's principal becomes $10,500 and that year's interest is calculated based on that new figure. This process repeats itself every year for 5 years. At the end of 5 years, with interest compounding at a yearly rate, we would actually end up with $12,763, leaving us with $263 more than simple interest.
<br> $263 is hardly an impressive extra profit, but hold that thought. Let's say you let that $10,000 sit for 10 years instead of 5. In that case, the simple interest would leave you with $15,000. On the other hand, compound interest would leave you with $16,288. That's an extra profit of $1,288! As you can see, allowing compound interest to build and grow over a longer period of time can make a big difference.
<br> Just ask Warren Buffett how powerful compound interest can be: <br>
"My wealth has come from a combination of living in America, some lucky genes, and compound interest." — Warren Buffett2   <br>

<h4> hBudgeting Tips to Get Your Finances on Track </h4>
Do you cringe when you hear the word budgeting? If so, you aren't alone. Creating a budget requires planning and a lot of work to record all financial transactions made in a household. It's even more work to keep spending within the limits of your monthly income.
<br> Some people find it difficult to remember to record each and every item purchased, while others are surprised when they see how much money they spend on small things like daily coffee. If you don't use some form of a budget, however, you run the risk of continually spending more money than you bring home or spending more money than you realize on things you don't need. You could also be at risk for missing payments on credit accounts, which may have a damaging effect on your credit history and score. No matter which financial life-stage your family is in, it's never too late to create a household budget.
<br> Recording how much of your monthly income goes to pay various bills and expenses will help you see where you may be spending more money than expected. Cutting unnecessary expenses frees up cash to increase emergency and long-term savings or pay down debt faster. Planning monthly spending so it doesn't exceed your monthly income can prevent you from turning to credit cards or loans to cover your regular monthly bills. Sticking to a budget can also help families, who would otherwise scramble to find the cash, to make their monthly mortgage or loan payments on time.
<br>

<h4> Set up a basic budget </h4>
Record your net monthly family income which is your total income from all sources less taxes, and other deductions from your gross wages. Then, list each bill, loan and credit account payment, as well as variable expenses that change from month to month, such as grocery spending, entertainment and restaurant costs. Remember to include a monthly contribution to savings in your expenses. If your expenses are greater than your monthly income, you'll need to find ways to increase your income, decrease your expenses, or both.
<h4>Avoid budgeting pitfalls </h4>
Families can find it difficult to stick to budgets that don't include rewards for careful money management. When you set up your budget, include a monthly amount to fund inexpensive activities or outings, such as monthly movie and dinner nights, concerts or sporting events, or longer-term goals, such as annual family vacations.
<br> Another common budget problem is forgetting to record daily spending. Small expenditures can add up over the month and are difficult to track down weeks after they've occurred. Avoid this problem by setting aside a monthly cash amount or allowance to family members to spend as they like.

<h4> How to Rebuild Your Savings </h4>
Sometimes no matter how much planning you do, your savings strategy goes awry. You can, however, rebuild your savings after a financial downturn. The key to rebuilding a drained savings account or a depleted retirement account is to start again, as soon as you can, and not wait for some "extra" money to come rolling in from a mysterious source. You have the ability to rebuild your safety net and give yourself peace of mind.

<h4> Revise your budget </h4>
<ol> 
Although you may have just survived a financial downturn due to unemployment or an unexpectedly large expense, now isn't the time to spend freely.
<li>	Revise your budget to account for a changed income or to include a payment plan for a large medical or home repair expense.
</li> <li> Cut back on frivolous spending. Reconsider your 300 cable channels, the latest gadget, going out to dinner five times a week or a new handbag every month. Distinguish between need and want and you may discover some extra money in your budget.
</li>
Your parents were right. Sometimes you have to make do with what you already have, including your current income. You can try to rebuild your savings when you pay yourself first. Here's how:
<li>	Invest in your company's tax-deferred 401(k) plan. This will help you build a retirement fund over time. It will also lower your taxable income which may result in a lower tax rate for you. If your company matches your contribution, this will boost your retirement savings even further.
</li> <li>	Consider an IRA account. If you don't have access to a company-sponsored 401(k) plan, consider a Roth or traditional individual retirement account (IRA). Just finding an extra $30 a week in your budget could make this a reality.
</li> <li>	Set up automatic deposits to a savings account. You may already have your mortgage or other bills set up to be paid automatically through your checking account, but what about your savings account? Pay your savings account monthly just like any other bill you receive.
</li>

</ol>
<h4> Spend extra money wisely </h4>

Extra money can sometimes find its way to you in the form of a pay raise, an income tax refund, a small inheritance, a work bonus or income from a side job. Consider using this extra money to pay yourself, not treat yourself.
<ol>	
<li>  Increase your 401(k) contribution if you receive a pay raise.</li>
<li> Stash refunds or bonuses into a savings account or your IRA.</li>
</ol>
<h4> Track your credit score </h4>
You've worked hard to pay down debt and rebuild your savings. Don't let the unknown sneak up on you. Keep an eye on your credit score as part of a routine to manage your financial well-being.
<br>
This information is for educational purposes only and does not constitute legal or financial advice. You should always seek the advice of a legal or financial professional before making legal or financial decisions.
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