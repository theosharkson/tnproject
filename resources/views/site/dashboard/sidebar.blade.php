<div class="sidebar-widget mb-40">
    <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">

      <li role="presentation" class="{{in_array(Request::route()->getName(), [
                              'client-dashboard',
                              ]) ? 'active' : ''}}">
        <a href="{{route('client-dashboard')}}">
          <i class="fa fa-dashboard"></i>
          Dashboard
          {{-- <span class="badge pull-right">{{getOrdersPendingPayment()->count()}}</span> --}}
        </a>
      </li>

      <li role="presentation" class="{{in_array(Request::route()->getName(), [
                              'client-dashboard.pending-payment',
                              ]) ? 'active' : ''}}">
        <a href="{{route('client-dashboard.pending-payment')}}">
          <i class="fa fa-money"></i>
          Orders Pending Payment
          <span class="badge pull-right">{{getOrdersPendingPayment()->count()}}</span>
        </a>
      </li>

      <li role="presentation">
        <a href="#">
          <i class="fa fa-thumbs-o-up"></i>
          Orders Pending Approval
          <span class="badge pull-right">{{getOrdersPendingApproval()->count()}}</span>
        </a>
      </li>

      <li role="presentation">
        <a href="#">
          <i class="fa fa-dropbox"></i>
          Paid Orders
          <span class="badge pull-right">0</span>
        </a>
      </li>

      <li role="presentation">
        <a href="#">
          <i class="fa fa-camera-retro"></i>
          Access Deliverables
        </a>
      </li>
    </ul>
</div>