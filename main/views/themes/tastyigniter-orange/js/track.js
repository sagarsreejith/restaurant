<button class="btn btn-default wizard-pf-open wizard-pf-complete" data-target="#complete">Launch wizard</button>
<div class="modal" id="complete" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg wizard-pf">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close">
          <span class="pficon pficon-close"></span>
        </button>
        <h4 class="modal-title">Wizard Title</h4>
      </div>
      <div class="modal-body wizard-pf-body clearfix">
        <div class="wizard-pf-steps hidden">
          <ul class="wizard-pf-steps-indicator wizard-pf-steps-alt-indicator active">

            <li class="wizard-pf-step active">
              <a href="#"><span class="wizard-pf-step-number">1</span><span class="wizard-pf-step-title">First Step</span>
              </a>
            </li>

            <li class="wizard-pf-step disabled">
              <a href="#">
                <span class="wizard-pf-step-number">2</span>
                <span class="wizard-pf-step-title">Second Step</span>
              </a>
            </li>

            <li class="wizard-pf-step disabled">
              <a href="#">
                <span class="wizard-pf-step-number">3</span>
                <span class="wizard-pf-step-title">Review</span>
              </a>
            </li>
          </ul>

          <ul class="wizard-pf-steps-alt">
            <li class="wizard-pf-step-alt active">
              <a href="#">
                <span class="wizard-pf-step-alt-number">1</span>
                <span class="wizard-pf-step-alt-title">First Step</span>
              </a>
                 
            </li>

            <li class="wizard-pf-step-alt">
              <a href="#">
                <span class="wizard-pf-step-alt-number">2</span>
                <span class="wizard-pf-step-alt-title">Second Step</span>
              </a>
                  
            </li>

            <li class="wizard-pf-step-alt">
              <a href="#">
                <span class="wizard-pf-step-alt-number">3</span>
                <span class="wizard-pf-step-alt-title">Review</span>
              </a>
             
            </li>
          </ul>
        </div>

        <div class="wizard-pf-row">
          <div class="wizard-pf-sidebar hidden">
            <ul class="list-group">
              <li class="list-group-item active">
                <a href="#">
                  <span class="wizard-pf-substep-number">1A.</span>
                  <span class="wizard-pf-substep-title">Details</span>
                </a>
              </li>
              <li class="list-group-item disabled">
                <a href="#">
                  <span class="wizard-pf-substep-number">1B.</span>
                  <span class="wizard-pf-substep-title">Settings</span>
                </a>
              </li>
            </ul>
            <ul class="list-group hidden">
              <li class="list-group-item disabled">
                <a href="#">
                  <span class="wizard-pf-substep-number">2A.</span>
                  <span class="wizard-pf-substep-title">Details</span>
                </a>
              </li>
              <li class="list-group-item disabled">
                <a href="#">
                  <span class="wizard-pf-substep-number">2B.</span>
                  <span class="wizard-pf-substep-title">Settings</span>
                </a>
              </li>
            </ul>
            <ul class="list-group hidden">
              <li class="list-group-item disabled">
                <a>
                  <span class="wizard-pf-substep-number">3A.</span>
                  <span class="wizard-pf-substep-title">Summary</span>
                </a>
              </li>
              <li class="list-group-item disabled wizard-pf-progress-link">
                <a>
                  <span class="wizard-pf-substep-number">3B.</span>
                  <span class="wizard-pf-substep-title">Progress</span>
                </a>
              </li>
            </ul>
          </div> <!-- /.wizard-pf-sidebar -->
          <div class="wizard-pf-main">
            <div class="wizard-pf-loading blank-slate-pf">
              <div class="spinner spinner-lg blank-slate-pf-icon"></div>
              <h3 class="blank-slate-pf-main-action">Loading Wizard</h3>
              <p class="blank-slate-pf-secondary-action">Lorem ipsum dolor sit amet, porta at suspendisse ac, ut wisi
                vivamus, lorem sociosqu eget nunc amet. </p>
            </div>
            <div class="wizard-pf-contents hidden">
              <form class="form-horizontal">
                <!-- replacing id with data-id to pass build errors -->
                <div class="form-group required">
                  <label class="col-sm-2 control-label required-pf" for="textInput-markup" required>Name</label>
                  <div class="col-sm-10">
                    <input id="detailsName" type="text" data-id="textInput-markup" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="descriptionInput-markup">Description (Optional)</label>
                  <div class="col-sm-10">
                    <textarea data-id="descriptionInput-markup" class="form-control" rows="2"></textarea>
                  </div>
                </div>
              </form>
            </div>
            <div class="wizard-pf-contents hidden">
              <form class="form-horizontal">
                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="lorem">Lorem ipsum</label>
                  <div class="col-sm-10">
                    <input type="text" id="lorem" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="dolor">Dolor (Optional)</label>
                  <div class="col-sm-10">
                    <textarea id="dolor" class="form-control" rows="2"></textarea>
                  </div>
                </div>
              </form>
            </div>
            <div class="wizard-pf-contents hidden">
              <form class="form-horizontal">
                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="aliquam">Aliquam</label>
                  <div class="col-sm-10">
                    <input type="text" id="aliquam" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="fermentum">Fermentum</label>
                  <div class="col-sm-10">
                    <textarea id="fermentum" class="form-control" rows="2"></textarea>
                  </div>
                </div>
              </form>
            </div>
            <div class="wizard-pf-contents hidden">
              <form class="form-horizontal">
                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="consectetur">Consectetur</label>
                  <div class="col-sm-10">
                    <input type="text" id="consectetur" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="adipiscing">Adipiscing</label>
                  <div class="col-sm-10">
                    <textarea id="adipiscing" class="form-control" rows="2"></textarea>
                  </div>
                </div>
              </form>
            </div>
            <div class="wizard-pf-contents hidden">
              <div class="wizard-pf-review-steps">
                <ul class="list-group">
                  <li class="list-group-item">
                    <a onclick="$(this).toggleClass('collapsed'); $('#reviewStep1').toggleClass('collapse');">First Step</a>
                    <div id="reviewStep1" class="wizard-pf-review-substeps">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <a onclick="$(this).toggleClass('collapsed'); $('#reviewStep1Substep1').toggleClass('collapse');">
                            <span class="wizard-pf-substep-number">1A.</span>
                            <span class="wizard-pf-substep-title">Details</span>
                          </a>
                          <div id="reviewStep1Substep1" class="wizard-pf-review-content">
                            <form class="form">
                              <div class="wizard-pf-review-item">
                                <span class="wizard-pf-review-item-label">Name:</span>
                                <span class="wizard-pf-review-item-value">First Last</span>
                              </div>
                              <div class="wizard-pf-review-item">
                                <span class="wizard-pf-review-item-label">Description:</span>
                                <span class="wizard-pf-review-item-value">This is the description</span>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <a onclick="$(this).toggleClass('collapsed'); $('#reviewStep1Substep2').toggleClass('collapse');">
                            <span class="wizard-pf-substep-number">1B.</span>
                            <span class="wizard-pf-substep-title">Settings</span>
                          </a>
                          <div id="reviewStep1Substep2" class="wizard-pf-review-content">
                            <form class="form">
                              <div class="wizard-pf-review-item">
                                <div class="wizard-pf-review-item-field">Setting A</div>
                                <div class="wizard-pf-review-item-field">Setting B</div>
                              </div>
                            </form>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <a onclick="$(this).toggleClass('collapsed'); $('#reviewStep2').toggleClass('collapse');">Second Step</a>
                    <div id="reviewStep2" class="wizard-pf-review-substeps">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <a onclick="$(this).toggleClass('collapsed'); $('#reviewStep2Substep1').toggleClass('collapse');">
                            <span class="wizard-pf-substep-number">2A.</span>
                            <span class="wizard-pf-substep-title">Details</span>
                          </a>
                          <div id="reviewStep2Substep1" class="wizard-pf-review-content">
                            <form class="form">
                              <div class="wizard-pf-review-item">
                                <span class="wizard-pf-review-item-label">Name:</span>
                                <span class="wizard-pf-review-item-value">First Last</span>
                              </div>
                              <div class="wizard-pf-review-item">
                                <span class="wizard-pf-review-item-label">Description:</span>
                                <span class="wizard-pf-review-item-value">This is the description</span>
                              </div>
                            </form>
                          </div>
                        </li>
                        <li class="list-group-item">
                          <a onclick="$(this).toggleClass('collapsed'); $('#reviewStep2Substep2').toggleClass('collapse');">
                            <span class="wizard-pf-substep-number">2B.</span>
                            <span class="wizard-pf-substep-title">Settings</span>
                          </a>
                          <div id="reviewStep2Substep2" class="wizard-pf-review-content">
                            <form class="form">
                              <div class="wizard-pf-review-item">
                                <div class="wizard-pf-review-item-field">Setting A</div>
                                <div class="wizard-pf-review-item-field">Setting B</div>
                              </div>
                            </form>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="wizard-pf-contents hidden">
              <div class="wizard-pf-process blank-slate-pf">
                <div class="spinner spinner-lg blank-slate-pf-icon"></div>
                <h3 class="blank-slate-pf-main-action">Deployment in progress</h3>
                <p class="blank-slate-pf-secondary-action">Lorem ipsum dolor sit amet, porta at suspendisse ac, ut wisi
                  vivamus, lorem sociosqu eget nunc amet. </p>
              </div>
              <div class="wizard-pf-complete blank-slate-pf hidden">
                <div class="wizard-pf-success-icon"><span class="glyphicon glyphicon-ok-circle"></span></div>
                <h3 class="blank-slate-pf-main-action">Deployment was successful</h3>
                <p class="blank-slate-pf-secondary-action">Lorem ipsum dolor sit amet, porta at suspendisse ac, ut wisi
                  vivamus, lorem sociosqu eget nunc amet. </p>
                <button type="button" class="btn btn-lg btn-primary">
                  View Deployment
                </button>

              </div>
            </div>
          </div><!-- /.wizard-pf-main -->
        </div>

      </div><!-- /.wizard-pf-body -->

      <div class="modal-footer wizard-pf-footer">
        <button type="submit" class="btn btn-primary wizard-pf-next disabled" disabled="disabled">
          <span class="wizard-pf-button-text">
            Next
          </span>
          <span class="i fa fa-angle-right"></span>
        </button>
        <button type="button" class="btn btn-default wizard-pf-back disabled" disabled="disabled">
          <span class="i fa fa-angle-left"></span>
          <span class="wizard-pf-button-text">
            Back
          </span>
        </button>
        <button type="button" class="btn btn-default btn-cancel wizard-pf-cancel wizard-pf-dismiss">Cancel</button>
        <button type="button" class="btn btn-primary hidden wizard-pf-close wizard-pf-dismiss">Close</button>
      </div><!-- /.wizard-pf-footer -->

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
  $(document).ready(function() {
    //initialize wizard
    var completeWizard = new wizard(".btn.wizard-pf-complete");
  });

  var wizard = function(id) {
    var self = this, modal, tabs, tabCount, tabLast, currentGroup, currentTab, contents;
    self.id = id;

    $(self.id).click(function() {
        self.init(this)
    });

    this.init = function(button){
      // get id of open modal
      self.modal = $(button).data("target");

      self.resetToInitialState();

      // open modal
      $(self.modal).modal('show');

      // assign data attribute to all tabs
      $(self.modal + " .wizard-pf-sidebar .list-group-item").each(function() {
          // set the first digit (i.e. n.0) equal to the index of the parent tab group
          // set the second digit (i.e. 0.n) equal to the index of the tab within the tab group
          $(this).attr("data-tab", ($(this).parent().index() +1 + ($(this).index()/10 + .1)));
      });
      // assign data attribute to all tabgroups
      $(self.modal + " .wizard-pf-sidebar .list-group").each(function() {
          // set the value equal to the index of the tab group
          $(this).attr("data-tabgroup", ($(this).index() +1));
      });

      // assign data attribute to all step indicator steps
      $(self.modal + " .wizard-pf-steps-indicator  .wizard-pf-step").each(function() {
        // set the value equal to the index of the tab group
        $(this).attr("data-tabgroup", ($(this).index() +1));
      });
      // assign data attribute to all step indicator substeps
      $(self.modal + " .wizard-pf-steps-indicator .wizard-pf-step-title-substep").each(function() {
        // set the first digit (i.e. n.0) equal to the index of the parent tab group
        // set the second digit (i.e. 0.n) equal to the index of the tab within the tab group
        $(this).attr("data-tab", ($(this).parent().parent().index() + 1 + (($(this).index() - 2)/10 + .1)));
      });

      // assign data attribute to all alt step indicator steps
      $(self.modal + " .wizard-pf-steps-alt .wizard-pf-step-alt").each(function() {
        // set the value equal to the index of the tab group
        var tabGroup = $(this).index() + 1;
        $(this).attr("data-tabgroup", tabGroup);
        $(this).find('.wizard-pf-step-alt-substep').each(function() {
          $(this).attr("data-tab", (tabGroup + (($(this).index() + 1)/10)));
        });
      });

      // assign active and hidden states to the steps alt classes
      $(self.modal + " .wizard-pf-steps-alt-indicator").removeClass('active');
      $(self.modal + " .wizard-pf-steps-alt").addClass('hidden');
      $(self.modal + " .wizard-pf-steps-alt-indicator").on('click', function() {
        $(self.modal + ' .wizard-pf-steps-alt-indicator').toggleClass('active');
        $(self.modal + ' .wizard-pf-steps-alt').toggleClass('hidden');
      });
      $(self.modal + " .wizard-pf-step-alt > ul").addClass("hidden");

      // create array of all tabs, using the data attribute, and determine the last tab
      self.tabs = $(self.modal + " .wizard-pf-sidebar .list-group-item" ).map(function()
        {
          return $(this).data("tab");
        }
      );
      self.tabCount = self.tabs.length;
      self.tabSummary = self.tabs[self.tabCount - 2]; // second to last tab displays summary
      self.tabLast = self.tabs[self.tabCount - 1]; // last tab displays progress
      // set first tab group and tab as current tab
      // if someone wants to target a specific tab, that could be handled here
      self.currentGroup = 1;
      self.currentTab = 1.1;

      setTimeout(function() {
        // hide loading message
        $(self.modal + " .wizard-pf-loading").addClass("hidden");
        // show tabs and tab groups
        $(self.modal + " .wizard-pf-steps").removeClass("hidden");
        $(self.modal + " .wizard-pf-sidebar").removeClass("hidden");
        // remove active class from all tabs
        $(self.modal + " .wizard-pf-sidebar .list-group-item.active").removeClass("active");

        self.updateToCurrentPage();
      }, 3000);

      //initialize click listeners
      self.tabGroupSelect();
      self.tabSelect();
      self.altStepClick();
      self.altSubStepClick();
      self.backBtnClicked();
      self.nextBtnClicked();
      self.cancelBtnClick();
      self.disableDefaultClick();

      // Listen for required value change
      self.detailsNameChange();

      // Handle form submit event
      self.formSubmitted();
    };

    // update which tab group is active
    this.updateTabGroup = function() {
      $(self.modal + " .wizard-pf-step.active").removeClass("active");
      $(self.modal + " .wizard-pf-step[data-tabgroup='" + self.currentGroup + "']").addClass("active");
      $(self.modal + " .wizard-pf-sidebar .list-group").addClass("hidden");
      $(self.modal + " .list-group[data-tabgroup='" + self.currentGroup + "']").removeClass("hidden");
      $(self.modal + " .wizard-pf-step-alt")
        .not("[data-tabgroup='" + self.currentGroup + "']").removeClass("active").end()
        .filter("[data-tabgroup='" + self.currentGroup + "']").addClass("active");
      $(self.modal + " .wizard-pf-step-alt > ul").addClass("hidden");
      $(self.modal + " .wizard-pf-step-alt[data-tabgroup='" + self.currentGroup + "'] > ul").removeClass("hidden");
    };

    // enable a button
    this.enableBtn = function($el) {
      $el.removeClass("disabled").removeAttr("disabled");
    };

    // disable a button
    this.disableBtn = function($el) {
      $el.addClass("disabled").attr("disabled", "disabled");
    };

    // update which tab is active
    this.updateActiveTab = function() {
      $(self.modal + " .list-group-item.active").removeClass("active");
      $(self.modal + " .list-group-item[data-tab='" + self.currentTab + "']").addClass("active");

      // Update steps indicator to handle mobile mode
      $(self.modal + " .wizard-pf-steps-indicator .wizard-pf-step-title-substep").removeClass("active");
      $(self.modal + " .wizard-pf-steps-indicator .wizard-pf-step-title-substep[data-tab='" + self.currentTab + "']").addClass("active");

      // Update steps alt indicator to handle mobile mode
      $(self.modal + " .wizard-pf-step-alt .wizard-pf-step-alt-substep").removeClass("active");
      $(self.modal + " .wizard-pf-step-alt .wizard-pf-step-alt-substep[data-tab='" + self.currentTab + "']").addClass("active");

      self.updateVisibleContents();
    };

    // update which contents are visible
    this.updateVisibleContents = function() {
      var tabIndex = ($.inArray(self.currentTab, self.tabs));
      // displaying contents associated with currentTab
      $(self.modal + " .wizard-pf-contents").addClass("hidden");
      $(self.modal + " .wizard-pf-contents:eq(" + tabIndex + ")").removeClass("hidden");
      // setting focus to first form field in active contents
      setTimeout (function() {
        $(".wizard-pf-contents:not(.hidden) form input, .wizard-pf-contents:not(.hidden) form textarea, .wizard-pf-contents:not(.hidden) form select").first().focus(); // this does not account for disabled or read-only inputs
      }, 100);
    };

    // update display state of Back button
    this.updateBackBtnDisplay = function() {
      var $backBtn = $(self.modal + " .wizard-pf-back");
      if (self.currentTab == self.tabs[0]) {
        self.disableBtn($backBtn)
      } else {
        self.enableBtn($backBtn)
      }
    };

    // update display state of next/finish button
    this.updateNextBtnDisplay = function() {
      if (self.currentTab == self.tabSummary) {
        $(self.modal + " .wizard-pf-next").focus().find(".wizard-pf-button-text").text("Deploy");
      } else {
        $(self.modal + " .wizard-pf-next .wizard-pf-button-text").text("Next");
      }
    };

    // update display state of buttons in the footer
    this.updateWizardFooterDisplay = function() {
      self.updateBackBtnDisplay();
      self.updateNextBtnDisplay();
    };


    this.updateToCurrentPage = function() {
      self.updateTabGroup();
      self.updateActiveTab();
      self.updateVisibleContents();
      self.updateWizardFooterDisplay();
    };

    // when the user clicks a step, then the tab group for that step is displayed
    this.tabGroupSelect = function() {
      $('body').on('click', self.modal + " .wizard-pf-step:not(.disabled) > a", function(e) {
        self.currentGroup = $(this).parent().data("tabgroup");
        // update value for currentTab -- if a tab is already marked as active
        // for the new tab group, use that, otherwise set it to the first tab
        // in the tab group
        self.currentTab = $(self.modal + " .list-group[data-tabgroup='" + self.currentGroup + "'] .list-group-item.active").data("tab");
        if (self.currentTab === undefined) {
          self.currentTab = self.currentGroup + 0.1;
        }

        self.updateToCurrentPage();
      });
    };

    // when the user clicks a tab, then the tab contents are displayed
    this.tabSelect = function() {
      $('body').on('click', self.modal + " .wizard-pf-sidebar .list-group-item:not(.disabled) > a", function(e) {
        // update value of currentTab to new active tab
        self.currentTab = $(this).parent().data("tab");
        self.updateToCurrentPage();
      });
    };

    this.altStepClick = function() {
      $(self.modal + " .wizard-pf-step-alt").each(function() {
        var $this = $(this);
        $(this).find('> a').on('click', function(e) {
          var subStepList = $this.find('> ul');
          if (subStepList && (subStepList.length > 0)) {
            $this.find('> ul').toggleClass('hidden');
          } else {
            self.currentGroup = $this.data("tabgroup");
          }
        });
      });
    };

    this.altSubStepClick = function() {
      $('body').on('click', self.modal + " .wizard-pf-step-alt .wizard-pf-step-alt-substep:not(.disabled) > a", function(e) {
        // update value of currentTab to new active tab
        self.currentTab = $(this).parent().data("tab");
        self.currentGroup = $(this).parent().parent().parent().data("tabgroup");
        self.updateToCurrentPage();
      });
    };

    // Back button clicked
    this.backBtnClicked = function() {
      $('body').on('click', self.modal + " .wizard-pf-back", function() {
        // if not the first page
        if (self.currentTab != self.tabs[0]) {
          // go back a page (i.e. -1)
          self.wizardPaging(-1);
          // show/hide/disable/enable buttons if needed
          self.updateWizardFooterDisplay();
        }
      });
    };

    // Next button clicked
    this.nextBtnClicked = function() {
      $('body').on('click', self.modal + " .wizard-pf-next", function() {
        if (self.currentTab == self.tabSummary) {
          self.wizardPaging(1);
          self.finish();
        } else {
          // go forward a page (i.e. +1)
          self.wizardPaging(1);
          // show/hide/disable/enable buttons if needed
          self.updateWizardFooterDisplay();
        }
      });
    };

    // Form submitted
    this.formSubmitted = function() {
      $('form').on('submit', function(e) {
        e.preventDefault();
        $('button[type="submit"]:not(.disabled)').trigger('click');
      });
    };

    // Disable click events
    this.disableDefaultClick = function() {
      $(self.modal + " .wizard-pf-step > a")
        .add(self.modal + " .wizard-pf-step-alt > a")
        .add(self.modal + " .wizard-pf-step-alt .wizard-pf-step-alt-substep > a")
        .add(self.modal + " .wizard-pf-sidebar .list-group-item > a").on('click', function(e) {
          e.preventDefault()
      });
    }

    this.validateRequired = function($el) {
      var $nextBtn = $(self.modal + " .wizard-pf-next"),
          $step = $(self.modal + " .wizard-pf-step"),
          $stepAltSubStep = $(self.modal + " .wizard-pf-step-alt-substep:not(.wizard-pf-progress-link)"),
          $sidebarItem = $(self.modal + " .wizard-pf-sidebar .list-group-item:not(.wizard-pf-progress-link)");

        if ($el.val()) {
          $stepAltSubStep.removeClass('disabled');
          $step.removeClass('disabled');
          $sidebarItem.removeClass('disabled');
          self.enableBtn($nextBtn);
        } else {
          $stepAltSubStep.not('.active').addClass('disabled');
          $step.not('.active').addClass('disabled');
          $sidebarItem.not('.active').addClass('disabled');
          self.disableBtn($nextBtn);
        }
    }

    this.detailsNameChange = function() {
      var $el = $(self.modal + " #detailsName");
      $el.on('change keyup load focus', function() {
        self.validateRequired($el);
      });
    };

    this.resetToInitialState = function() {
      // drop click event listeners
      $(self.modal + " .wizard-pf-steps-alt-indicator").off('click');
      $(self.modal + " .wizard-pf-step-alt > a").off('click');
      $(self.modal + " #detailsName").off('change');
      $("form").off("submit");
      $("body").off("click");

      // reset final step
      $(self.modal + " .wizard-pf-process").removeClass("hidden");
      $(self.modal + " .wizard-pf-complete").addClass("hidden");
      // reset loading message
      $(self.modal + " .wizard-pf-contents").addClass("hidden");
      $(self.modal + " .wizard-pf-loading").removeClass("hidden");
      // remove tabs and tab groups
      $(self.modal + " .wizard-pf-steps").addClass("hidden");
      $(self.modal + " .wizard-pf-sidebar").addClass("hidden");
      // reset buttons in final step
      $(self.modal + " .wizard-pf-close").addClass("hidden");
      $(self.modal + " .wizard-pf-cancel").removeClass("hidden");
      $(self.modal + " .wizard-pf-next").removeClass("hidden").find(".wizard-pf-button-text").text("Next");
      // reset input fields
      $(self.modal + " .form-control").val("");
    };

    // Cancel/Close button clicked
    this.cancelBtnClick = function() {
      $(self.modal + " .wizard-pf-dismiss").click(function() {
        // close the modal
        $(self.modal).modal('hide');
        self.resetToInitialState();
      });
    };

    // when the user clicks Next/Back, then the next/previous tab and contents display
    this.wizardPaging = function(direction) {
      // get n.n value of next tab using the index of next tab in tabs array
      var tabIndex = ($.inArray(self.currentTab, self.tabs)) + direction;
      var newTab = self.tabs[tabIndex];
      // add/remove active class from current tab group
      // included math.round to trim off extra .000000000002 that was getting added
      if (newTab != Math.round(10*(direction*.1 + self.currentTab))/10) {
        // this statement is true when the next tab is in the next tab group
        // if next tab is in next tab group (e.g. next tab data-tab value is
        // not equal to current tab +.1) then apply active class to next
        // tab group and step, and update the value for var currentGroup +/-1
        self.currentGroup = self.currentGroup + direction;
        self.updateTabGroup();
      }
      self.currentTab = newTab;
      // remove active class from active tab in current tab group
      $(self.modal + " .list-group[data-tabgroup='" + self.currentGroup + "'] .list-group-item.active").removeClass("active");
      // apply active class to new current tab and associated contents
      self.updateActiveTab();
    };

    // This code keeps the same contents div active, but switches out what
    // contents display in that div (i.e. replaces process message with
    // success message).
    this.finish = function() {
      self.disableBtn($(self.modal + " .wizard-pf-back")); // if Back remains enabled during this step, then the Close button needs to be removed when the user clicks Back
      self.disableBtn($(self.modal + " .wizard-pf-next"));
      // disable progress link navigation
      $(self.modal + " .wizard-pf-step").addClass('disabled');
      $(self.modal + " .wizard-pf-step-alt").addClass('disabled');
      $(self.modal + " .wizard-pf-step-alt .wizard-pf-step-alt-substep").addClass('disabled');
      $(self.modal + " .wizard-pf-sidebar .list-group-item").addClass('disabled');
      // code for kicking off process goes here
      // the next code is just to simulate the expected experience, in that
      // when the process is complete, the success message etc. would display
      setTimeout (function() {
        $(self.modal + " .wizard-pf-cancel").addClass("hidden");
        $(self.modal + " .wizard-pf-next").addClass("hidden");
        $(self.modal + " .wizard-pf-close").removeClass("hidden");
        $(self.modal + " .wizard-pf-process").addClass("hidden");
        $(self.modal + " .wizard-pf-complete").removeClass("hidden");
      }, 3000);
    };
  };

</script>