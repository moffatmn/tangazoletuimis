<div class="sub-nav">
    <ul>
        <li><a href="" class="heading">Sales</a></li>
        <li>
            <a href="#" class="selected">
                Input Sales
            </a>
        </li>
        <li>
            <a href="#">
                Daily sales
            </a>
        </li>
        <li>
            <a href="#">
                Weekly Sales
            </a>
        </li>
        <li>
            <a href="#">
                Monthly Sales
            </a>
        </li>
        <li>
            <a href="#">
                Annual Sales
            </a>
        </li>
    </ul>
</div>


<div class="dashboard-wrapper">

    <div class="left-sidebar">

        <div class="row-fluid">
            <div class="span12">
                <div class="widget">
                    <div class="widget-header">
                        <!--form-->
                        <form class="form-horizontal" action="#">
                        
                        <div class="title">
                      
                      Post your sales 
                      <span class="mini-title">
                        Sales description and details
                      </span>
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
                    <p>Sales description and details</p>
                    <div class="wysiwyg-container">
                      <div class="control-group">
                        <label class="control-label" for="sales-product">
                          Product Sold
                        </label>
                        <div class="controls">
                          <select id="sales-product" class="span6">
                            <option value="">
                              --Select Product--
                            </option>
                            <option value="HR Payroll System">
                              HR Payroll System
                            </option>
                            <option value="USSD Alert Service">
                              USSD Alert Service
                            </option>
                            <option value="Inventory Management System">
                              Inventory Management System
                            </option>
                            
                          </select>
                        </div>
                    </div>
                        <label class="control-label" for="date_range2">
                          Sales Description
                        </label>                    
                      <textarea id="wysiwyg" class="input-block-level" placeholder="Describe your sales here ..." style="height: 50px">
                      </textarea>
                      
                    </div>
                    
                    
                    <div class="control-group">
                        <label class="control-label" for="date_range2">
                          Date
                        </label>
                        <div class="controls">
                          <div class="input-append">
                            <input type="date" class="date_picker" name="date_range2" id="date_range2" placeholder="Choose date" />
                          </div>
                        </div>
                      </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="customer">
                          Client
                        </label>
                        <div class="controls">
                          <select id="client" class="span6">
                            <option value="">
                              --Select Client--
                            </option>
                            <option value="Coders4Africa">
                              Coders4Africa
                            </option>
                            <option value="Computer Aid International">
                              Computer Aid International
                            </option>
                            <option value="Safaricom">
                              Safaricom
                            </option>
                            <option value="Orange Systems">
                              Orange Systems
                            </option>
                            
                          </select>
                        </div>
                    </div>
                    
                    
                    <div class="form-actions no-margin">
                        <button type="submit" class="btn btn-info pull-right">
                          Post sales
                        </button>
                  </div>
                  </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>