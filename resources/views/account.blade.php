@extends('./layouts/base')
@section('title', 'Account-Telnet')
@section('headerLeft', 'Account')
@section('account', 'active')

@section('body')

<div class="row mb-4">
    <div class="col-12 col-xxl-4 col-xl-6  col-lg-12 col-md-12 col-sm-12 mb-4">
        <div class="card  card-dark">
            <div class="card-header">
                <h3 class="card-title">Your Latest Payment <i class="fa-solid fa-indian-rupee-sign"></i></h3>
                <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="fa-solid fa-plus"></i> <i data-lte-icon="collapse" class="fa-solid fa-minus"></i></button></div><!-- /.card-tools -->
            </div><!-- /.card-header -->
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Task</th>
                            <th>Method</th>
                            <th style="width: 40px">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Internet Bill Paid</td>
                            <td>Online(Esewa)
                            </td>
                            <td>300$</td>
                        </tr>
                        
                    </tbody>
                </table>

            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /.col -->

    <div class="col-12 col-xxl-4 col-xl-6  col-lg-6 col-md-12 col-sm-12">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">My Subscribed Plan <i class="fa-solid fa-star"></i></h3>
                <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="fa-solid fa-plus"></i> <i data-lte-icon="collapse" class="fa-solid fa-minus"></i></button></div><!-- /.card-tools -->
            </div><!-- /.card-header -->
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Service</th>
                            <th>Speed</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Internet</td>
                            <td>200Mbps</td>
                            <td>1yrs</td>
                            <td><span class="badge text-bg-success">Active</span></td>
                            <td>300$</td>
                        </tr>
                        
                    </tbody>
                </table>

            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div><!-- /.col -->

    <div class="col-12 col-xxl-4 col-xl-6 col-lg-6 col-md-12 col-sm-12">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">Days Remaining <i class="fa-regular fa-calendar-days"></i></h3>
                <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="fa-solid fa-plus"></i> <i data-lte-icon="collapse" class="fa-solid fa-minus"></i></button></div><!-- /.card-tools -->
            </div><!-- /.card-header -->
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td><h4 class="">20 days</h4></td>
                            <td><button class="btn btn-danger float-end">Pay Advance</button></td>
                        </tr>
                        
                        {{-- <tr>
                            <td><h4 class="">20 days</h4></td>
                        </tr> --}}
                    </tbody>
                    <tfoot>
                        
                    </tfoot>
                </table>
                <div class="progress mt-3" role="progressbar" aria-label="Danger striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%; border-radius: 0.375rem;"></div>
                </div>
                
            </div><!-- /.card-body -->
        </div><!-- /.card -->                
    </div>
</div>

<div class="col-12 mb-4">
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Transaction History <i class="fa-solid fa-receipt"></i></h3>
            <div class="card-tools"><button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"><i data-lte-icon="expand" class="fa-solid fa-plus"></i> <i data-lte-icon="collapse" class="fa-solid fa-minus"></i></button></div><!-- /.card-tools -->
        </div><!-- /.card-header -->
        <div class="card-body">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Package Name</th>
                        <th>Subscribed Period</th>
                        <th>Payment Method</th>
                        <th>Age</th>
                        <th>Billing Date</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>1 Year</td>
                        <td>Esewa</td>
                        <td>61</td>
                        <td>2023-04-25</td>
                        <td>$320</td>
                    </tr>
                    <tr>
                        <td>Home(300Mbps)</td>
                        <td>1 Months</td>
                        <td>Cash</td>
                        <td>63</td>
                        <td>2023-03-25</td>
                        <td>$35</td>
                    </tr>
                    <tr>
                        <td>Home(100Mbps)</td>
                        <td>3 Months</td>
                        <td>Khalti</td>
                        <td>66</td>
                        <td>2022-12-25</td>
                        <td>$60</td>
                    </tr>
                    <tr>
                        <td>Home(150Mbps)</td>
                        <td>6 Months</td>
                        <td>Cheque</td>
                        <td>22</td>
                        <td>2022-06-20</td>
                        <td>$145</td>
                    </tr>
                    <tr>
                        <td>Home(100Mbps)</td>
                        <td>1 Months</td>
                        <td>Cash</td>
                        <td>33</td>
                        <td>2022-05-20</td>
                        <td>$22</td>
                    </tr>
                    <tr>
                        <td>Home(150Mbps)</td>
                        <td>1 Months</td>
                        <td>Cash</td>
                        <td>61</td>
                        <td>2022-04-20</td>
                        <td>$27</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>1 Months</td>
                        <td>Cash</td>
                        <td>59</td>
                        <td>2022-03-20</td>
                        <td>$30</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>1 Year</td>
                        <td>Cheque</td>
                        <td>55</td>
                        <td>2021-03-25</td>
                        <td>$320</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>3 Months</td>
                        <td>Cash</td>
                        <td>39</td>
                        <td>2019-12-25</td>
                        <td>$85</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>6 Monmths</td>
                        <td>Khalti</td>
                        <td>23</td>
                        <td>2019-05-20</td>
                        <td>$175</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Office Manager</td>
                        <td>Esewa</td>
                        <td>30</td>
                        <td>2008-12-19</td>
                        <td>$90,560</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Support Lead</td>
                        <td>Khalti</td>
                        <td>22</td>
                        <td>2013-03-03</td>
                        <td>$342,000</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Regional Director</td>
                        <td>Cash</td>
                        <td>36</td>
                        <td>2008-10-16</td>
                        <td>$470,600</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Senior Marketing Designer</td>
                        <td>Esewa</td>
                        <td>43</td>
                        <td>2012-12-18</td>
                        <td>$313,500</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Regional Director</td>
                        <td>Esewa</td>
                        <td>19</td>
                        <td>2010-03-17</td>
                        <td>$385,750</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Marketing Designer</td>
                        <td>Esewa</td>
                        <td>66</td>
                        <td>2012-11-27</td>
                        <td>$198,500</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>Cash</td>
                        <td>64</td>
                        <td>2010-06-09</td>
                        <td>$725,000</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Systems Administrator</td>
                        <td>Cash</td>
                        <td>59</td>
                        <td>2009-04-10</td>
                        <td>$237,500</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Software Engineer</td>
                        <td>Esewa</td>
                        <td>41</td>
                        <td>2012-10-13</td>
                        <td>$132,000</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Personnel Lead</td>
                        <td>Khalti</td>
                        <td>35</td>
                        <td>2012-09-26</td>
                        <td>$217,500</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Development Lead</td>
                        <td>Cash</td>
                        <td>30</td>
                        <td>2011-09-03</td>
                        <td>$345,000</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Chief Marketing Officer (CMO)</td>
                        <td>Cash</td>
                        <td>40</td>
                        <td>2009-06-25</td>
                        <td>$675,000</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Pre-Sales Support</td>
                        <td>Cash</td>
                        <td>21</td>
                        <td>2011-12-12</td>
                        <td>$106,450</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Sales Assistant</td>
                        <td>Khalti</td>
                        <td>23</td>
                        <td>2010-09-20</td>
                        <td>$85,600</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Chief Executive Officer (CEO)</td>
                        <td>Esewa</td>
                        <td>47</td>
                        <td>2009-10-09</td>
                        <td>$1,200,000</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>1 Year</td>
                        <td>Khalti</td>
                        <td>42</td>
                        <td>2010-12-22</td>
                        <td>$92,575</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Regional Director</td>
                        <td>Cheque</td>
                        <td>28</td>
                        <td>2010-11-14</td>
                        <td>$357,650</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Software Engineer</td>
                        <td>Cash</td>
                        <td>28</td>
                        <td>2011-06-07</td>
                        <td>$206,850</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Chief Operating Officer (COO)</td>
                        <td>Cash</td>
                        <td>48</td>
                        <td>2010-03-11</td>
                        <td>$850,000</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Regional Marketing</td>
                        <td>Cheque</td>
                        <td>20</td>
                        <td>2011-08-14</td>
                        <td>$163,000</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Integration Specialist</td>
                        <td>Khalti</td>
                        <td>37</td>
                        <td>2011-06-02</td>
                        <td>$95,400</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>1 Year</td>
                        <td>Esewa</td>
                        <td>53</td>
                        <td>2009-10-22</td>
                        <td>$114,500</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Technical Author</td>
                        <td>Esewa</td>
                        <td>27</td>
                        <td>2011-05-07</td>
                        <td>$145,000</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Team Leader</td>
                        <td>Cash</td>
                        <td>22</td>
                        <td>2008-10-26</td>
                        <td>$235,500</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Post-Sales support</td>
                        <td>Khalti</td>
                        <td>46</td>
                        <td>2011-03-09</td>
                        <td>$324,050</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Marketing Designer</td>
                        <td>Cash</td>
                        <td>47</td>
                        <td>2009-12-09</td>
                        <td>$85,675</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Office Manager</td>
                        <td>Cash</td>
                        <td>51</td>
                        <td>2008-12-16</td>
                        <td>$164,500</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Secretary</td>
                        <td>Cash</td>
                        <td>41</td>
                        <td>2010-02-12</td>
                        <td>$109,850</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Financial Controller</td>
                        <td>Cash</td>
                        <td>62</td>
                        <td>2009-02-14</td>
                        <td>$452,500</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Office Manager</td>
                        <td>Esewa</td>
                        <td>37</td>
                        <td>2008-12-11</td>
                        <td>$136,200</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Director</td>
                        <td>Cash</td>
                        <td>65</td>
                        <td>2008-09-26</td>
                        <td>$645,750</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Support Engineer</td>
                        <td>Cheque</td>
                        <td>64</td>
                        <td>2011-02-03</td>
                        <td>$234,500</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Software Engineer</td>
                        <td>Esewa</td>
                        <td>38</td>
                        <td>2011-05-03</td>
                        <td>$163,500</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Support Engineer</td>
                        <td>Cheque</td>
                        <td>37</td>
                        <td>2009-08-19</td>
                        <td>$139,575</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>1 Year</td>
                        <td>Cash</td>
                        <td>61</td>
                        <td>2013-08-11</td>
                        <td>$98,540</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Support Engineer</td>
                        <td>Cash</td>
                        <td>47</td>
                        <td>2009-07-07</td>
                        <td>$87,500</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Data Coordinator</td>
                        <td>Cheque</td>
                        <td>64</td>
                        <td>2012-04-09</td>
                        <td>$138,575</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Software Engineer</td>
                        <td>Cash</td>
                        <td>63</td>
                        <td>2010-01-04</td>
                        <td>$125,250</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Software Engineer</td>
                        <td>Cash</td>
                        <td>56</td>
                        <td>2012-06-01</td>
                        <td>$115,000</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Junior Javascript 1 Year</td>
                        <td>Khalti</td>
                        <td>43</td>
                        <td>2013-02-01</td>
                        <td>$75,650</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Sales Assistant</td>
                        <td>Cash</td>
                        <td>46</td>
                        <td>2011-12-06</td>
                        <td>$145,600</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Regional Director</td>
                        <td>Esewa</td>
                        <td>47</td>
                        <td>2011-03-21</td>
                        <td>$356,250</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Systems Administrator</td>
                        <td>Esewa</td>
                        <td>21</td>
                        <td>2009-02-27</td>
                        <td>$103,500</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>1 Year</td>
                        <td>Cash</td>
                        <td>30</td>
                        <td>2010-07-14</td>
                        <td>$86,500</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Regional Director</td>
                        <td>Khalti</td>
                        <td>51</td>
                        <td>2008-11-13</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Javascript 1 Year</td>
                        <td>Cheque</td>
                        <td>29</td>
                        <td>2011-06-27</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>Home(200Mbps)</td>
                        <td>Customer Support</td>
                        <td>Cash</td>
                        <td>27</td>
                        <td>2011-01-25</td>
                        <td>$112,000</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot>
            </table>
        </div><!-- /.card-body -->
    </div><!-- /.card -->                
</div>

@endsection


@section('script-end')
<link href="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.css" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>

<script>
    new DataTable('#example', {
    order: [[4, 'desc']],
    columnDefs: [
        {
            target: 3,
            visible: false,
            searchable: false
        }
    ]
});
</script>

@endsection