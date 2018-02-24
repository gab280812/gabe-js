<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blink Mortgage | Mortgage quotes</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
    <link rel="stylesheet" href="public/css/vendor.css">
    <link rel="stylesheet" href="public/css/b-custom.css">
    <link rel="shortcut icon" href="http://blinkmortgageutah.com/wp-content/uploads/2017/05/Christian-Mortgage-Logo.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="content" id="main-wrapper">
      <div class="row">
        <div class="col-md-9">
          <h1>Rate and Quote</h1>
          <h2>Blink Mortgage</h2>
          <form>
            <!-- Required! -->
            <ul class="items"></ul>

            <fieldset class="enable">
              <legend class="text-center">1. Where are you looking to get a loan?</legend>
              <div class="text-center fieldset-content">
                <input type="text" name="zipcode" id="zipcode" placeholder="Zip Code" autocomplete="off"/>

                <div class="text-center show-info-places invisible">
                  <span id="placeName"></span> - <span id="stateName"></span>
                </div>

                <div class="text-center show-erro-places invisible">
                  <span>Sorry, we can only offer services in Utah.</span>
                </div>

                <div class="text-center show-erro-notfound invisible">
                  <span>Can not find the zip code you are looking for.</span>
                </div>
              </div>

              <div class="fieldset-footer">
                <button type="button" id="btnNextPlaces" class="next invisible">Next</button>
              </div>
            </fieldset>

            <fieldset class="">
              <legend class="text-center">2. What do you want to do?</legend>
              <div class="text-center fieldset-content">
                <div class="row">
                  <button class='bBack'  type='button'>BACK</button>
                  <div class="col-md-6">
                    <button type="button" id="purchase" class="btn-simple pull-right">Purchase</button>
                  </div>
                  <div class="col-md-6">
                    <button type="button" id="refinance" class="btn-simple pull-left">Refinance</button>
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset class="">
              <legend class="text-center">3. What type of property is it?</legend>
              <div class="text-center fieldset-content">
                <div class="row">
                  <button class='bBack'  type='button'>BACK</button>
                  <div class="col-md-12">
                    <button type="button" id="btnSingleFamily" class="btn-simple large">Single Family Residence</button>
                  </div>
                  <div class="col-md-6">
                    <button type="button" id="btnCondo" class="btn-simple pull-right">Condo</button>
                  </div>
                  <div class="col-md-6">
                    <button type="button" id="btnMultiUnit" class="btn-simple pull-left">Multi-Unit</button>
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset class="">
              <legend class="text-center">4. This property will be used as a</legend>
              <div class="text-center fieldset-content">
                <div class="row">
                  <button class='bBack'  type='button'>BACK</button>
                  <div class="col-md-12">
                    <button type="button" id="btnPrimaryHome" class="btn-simple large">Primary Home</button>
                  </div>
                  <div class="col-md-6">
                    <button type="button" id="btnSecondaryHome" class="btn-simple pull-right">Secondary Home</button>
                  </div>
                  <div class="col-md-6">
                    <button type="button" id="btnInvestmentHome" class="btn-simple pull-left">Investment Home</button>
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset class="">
              <legend class="text-center">5. How long do you plan to own <br> this property?</legend>
              <div class="text-center fieldset-content">
                <div class="row">
                  <button class='bBack'  type='button'>BACK</button>
                  <div class="col-md-6">
                    <button type="button" id="btn5to7Yrs" class="btn-simple medium">5 to 7 Yrs</button>
                    <button type="button" id="btnLessThan15Yrs" class="btn-simple medium">Less than 15 Yrs</button>
                  </div>
                  <div class="col-md-6">
                    <button type="button" id="MoreThan15Yrs" class="btn-simple medium">More than 15 Yrs</button>
                    <button type="button" id="NotSure" class="btn-simple medium">Not Sure</button>
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset class="">
              <legend class="text-center">6. Are you comfortable with an <br> adjustable rate loan?</legend>
              <div class="text-center fieldset-content">
                <div class="row">
                  <button class='bBack'  type='button'>BACK</button>
                  <div class="col-md-12">
                    <button type="button" id="btnYesComfortable" class="btn-simple medium">Yes</button>
                    <button type="button" id="btnNoComfortable" class="btn-simple medium">No</button>
                    <button type="button" id="btnYNoSureComfortable" class="btn-simple medium">Not Sure</button>
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset class="">
              <legend class="text-center">7. Are you a United States Veteran?</legend>
              <div class="text-center fieldset-content">
                <div class="row">
                  <button class='bBack'  type='button'>BACK</button>
                  <div class="col-md-12">
                    <button type="button" id="btnYesVeteran" class="btn-simple medium">Yes</button>
                    <button type="button" id="btnNoVeteran" class="btn-simple medium">No</button>
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset class="">
              <legend class="text-center">8. What are you expecting to pay for <br> this property?</legend>
              <div class="text-center fieldset-content">
                <div class='row'>
                  <button class='bBack'  type='button'>BACK</button>
                <input type="text" name="value_expecting" id="value_expecting" value="">
              </div>
              <div class="fieldset-footer">
                <button type="button" name="next" class="next expecting" id="ExpectingPay">Next</button>
              </div>
            </div>
            </fieldset>

            <fieldset class="">
              <legend class="text-center">9. How much are you expecting to put down?</legend>
              <div class='row'>
                <button class='bBack'  type='button'>BACK</button>
              <div class="text-center fieldset-content">
                <input type="text" name="value_putdown" id="value_putdown" value="">
              </div>
              <div class="fieldset-footer">
                <button type="button" name="next" class="next putDown" id="PutDown">Next</button>
              </div>
            </div>
            </fieldset>

            <!--
            <fieldset class="">
              <legend class="text-center">10. What’s your credit score?</legend>
              <div class="text-center fieldset-content"></div>
              <div class="fieldset-footer">
                <button type="button" name="next" class="next">Next</button>
              </div>
            </fieldset>
            -->

            <fieldset class="">
              <legend class="text-center">We're done!</legend>
              <div class="text-center fieldset-content" style="margin-left: 19%;">
                <p class="text-center">Thanks for your cooperation.</p>
                <p></p>
              </div>
              <div class="fieldset-footer"></div>
            </fieldset>
          </form>
        </div>

        <div class="col-md-3 col-login-box-alt">
          <div class="panel panel-white login-box" id="right-box">
            <div class="panel-body">
              <img src="public/images/blinkmortgageutah.svg" alt="Blink Mortgage Utah" class="image-primary">

              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default" id="one">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Property Location
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">Lenders have slightly different pricing depending on where your property is.</div>
                  </div>
                </div>
                <div class="panel panel-default invisible" id="two">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Property Type
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      <b>Single Family Residence: </b>
                      A free-standing, unattached, residential building. This includes Townhomes and Planned Unit Developments (PUDs).
                      <br>

                      <b>Condo (Condominium): </b>
                      One of a group of housing units where each homeowner owns their individual unit space, and share ownership of common use areas.
                      <br>

                      <b>Multi-Unit: </b>
                      Multiple separate housing units for residents contained within one building or several buildings within one complex (e.g. apartment building).
                    </div>
                  </div>
                </div>
                <div class="panel panel-default invisible" id="three">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Property Use
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                      <b>Primary Home: </b>
                      Property that will be occupied by the borrower for the majority of the calendar year.
                      <br>

                      <b>Secondary Home: </b>
                      Property where the borrower lives part time. e.g. vacation home, resort property, another home, or an apartment.
                      <br>

                      <b>Investment Home: </b>
                      Property that is earning a return either through rent, the future resale of the property, or both.
                    </div>
                  </div>
                </div>
                  <div class="panel panel-default invisible" id="four">
                  <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                     Length of Ownership
                    </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                      <ul>
                        <li style='margin:5px;'> 5 - 7 years (short-term)</li>
                        <li style='margin:5px;'> Less than 15 years </li>
                        <li style='margin:5px;'> More than 15 years (long-term)</li>
                        <li style='margin:5px;'> Not sure (that's okay too)</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default invisible" id="five">
                  <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                     Adjustable Rate Loan
                    </h4>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body">
                      <p> A variable-rate mortgage, adjustable-rate mortgage (ARM), or tracker mortgage is a mortgage loan with the interest rate on the note periodically adjusted based on an index which reflects the cost to the lender of borrowing on the credit markets. The loan may be offered at the lender's standard variable rate/base rate.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default invisible" id="six">
                  <div class="panel-heading" role="tab" id="headingSix">
                    <h4 class="panel-title" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                     Are you a United States Veteran?
                    </h4>
                  </div>
                  <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="panel-body">
                      <p> Special programs are available to US Veterans when buying a house</p>
                    </div>
                  </div>
                </div>
               <div class="panel panel-default invisible" id="seven">
                  <div class="panel-heading" role="tab" id="headingSeven">
                    <h4 class="panel-title" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                     What is your price range?
                    </h4>
                  </div>
                  <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                    <div class="panel-body">
                      <p> Price range will affect down-payment and other variables.</p>
                    </div>
                  </div>
                </div>
               <div class="panel panel-default invisible" id="eight">
                  <div class="panel-heading" role="tab" id="headingEight">
                    <h4 class="panel-title" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                     PRICE RANGE
                    </h4>
                  </div>
                  <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                    <div class="panel-body">
                      <p id='priceEight'></p>
                    </div>
                  </div>
                </div>



              </div>

              <p class="text-center" style="position: absolute; bottom: 10%; left: 0; right: 0;">
                <span id="asking"></span> of <span id="count"></span> answered.
              </p>
              <p class="text-center m-t-xs text-sm login-footer"><?php echo date("Y"); ?> © Blink Mortgage</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-uppercase">One of Your Custom Rates</h4>
          </div>
          <div class="modal-body">
            <!-- Conteúdo-->
            <div id="contentModal" class="invisible" style="min-height: 490px;">
              <div class="row">
                <div class="col-sm-12">
                  <span id="years"></span>
                </div>
              </div>
              <div class="row text-center">
                <div class="col-sm-4">
                  <buttton class="btn btn-default-modal btn-lg btn-block">
                    <span id="monthly"></span><br>
                    <span class="lite">monthly payment</span>
                  </buttton>
                </div>
                <div class="col-sm-4">
                  <buttton class="btn btn-default-modal btn-lg btn-block">
                    <span id="rate"></span><br>
                    <span class="lite">Rate</span>
                  </buttton>
                </div>
                <div class="col-sm-4">
                  <buttton class="btn btn-default-modal btn-lg btn-block">
                    <span id="apr"></span><br>
                    <span class="lite">APR</span>
                  </buttton>
                </div>
                <div class="col-sm-12">
                  <h2 class="text-center">More information</h2>
                  <form action="#" class="for" style="left: 50%; margin-top: 20%; right: -17%;">
                    <div class="form-group" style="margin-top: 40%;">
                      <label for="nameInput" class="for-email">Name</label>
                      <input type="text" class="form-control" id="nameInput" placeholder="You name">
                    </div>
                    <div class="form-group" style="">
                      <label for="phoneInput" class="for-email">Phone Number</label>
                      <input type="text" class="form-control" id="phoneInput" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                      <label for="emailInput" class="for-email">E-mail</label>
                      <input type="email" class="form-control" id="emailInput" placeholder="You e-mail">
                    </div>
                    <button type="button" class="btn btn-default" id="submitForm" style="border-color: #35a592; color: #35a592; border-radius: 0;">More Info</button>
                  </form>
                </div>
                <div class="col-sm-12 text-center" style="margin-top: 60%;">
                  <button class="btn btn-default-modal" onclick="location.reload();">Redo <i class="fa fa-retweet" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="myModalErro">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-uppercase">One of Your Custom Rates</h4>
          </div>
          <div class="modal-body">
            <!-- Conteúdo-->
            <div id="showErroModal">
              <div class="row">
                <div class="col-sm-12 text-center">We could not recover any property <br> with the parameters you filled in.</div>
                <div class="col-sm-12 text-center">
                  <button class="btn btn-default-modal" onclick="location.reload();">Redo <i class="fa fa-retweet" aria-hidden="true"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="public/js/vendor.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js" charset="utf-8"></script>
    <script src="public/js/main.js" charset="utf-8"></script>
  </body>
</html>
