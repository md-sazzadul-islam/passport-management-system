<li class="nav-item {{ Request::is('home*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('home') }}">
        <i class="nav-icon icon-speedometer"></i>
        <span>Dashboard</span>
    </a>
</li>

<li class="nav-item {{ Request::is('possitions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('possitions.index') }}">
        <i class="nav-icon icon-directions"></i>
        <span>Possitions</span>
    </a>
</li>

<li class="nav-item {{ Request::is('selectionStatuses*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('selectionStatuses.index') }}">
        <i class="nav-icon icon-direction"></i>
        <span>Selection Status</span>
    </a>
</li>

<li class="nav-item {{ Request::is('references*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('references.index') }}">
        <i class="nav-icon icon-size-actual"></i>
        <span>References</span>
    </a>
</li>

<li class="nav-item {{ Request::is('medicalStatuses*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('medicalStatuses.index') }}">
        <i class="nav-icon icon-briefcase"></i>
        <span>Medical Status</span>
    </a>
</li>
<li class="nav-item {{ Request::is('medicalReports*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('medicalReports.index') }}">
        <i class="nav-icon icon-calculator"></i>
        <span>Medical Report status</span>
    </a>
</li>
<li class="nav-item {{ Request::is('agents*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('agents.index') }}">
        <i class="nav-icon icon-rocket"></i>
        <span>Agents</span>
    </a>
</li>
<li class="nav-item {{ Request::is('passports*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('passports.index') }}">
        <i class="nav-icon icon-wallet"></i>
        <span>Passports list</span>
    </a>
</li>

<li class="nav-item {{ Request::is('payments*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('payments.index') }}">
        <i class="nav-icon icon-paypal"></i>
        <span>Payments</span>
    </a>
</li>
<li class="nav-item {{ Request::is('payments*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('payment_report') }}">
        <i class="nav-icon icon-paypal"></i>
        <span>Payment report</span>
    </a>
</li>

<li class="nav-item {{ Request::is('settings*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('settings.index') }}">
        <i class="nav-icon icon-settings"></i>
        <span>Settings</span>
    </a>
</li>
<li class="nav-item {{ Request::is('settings*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users.index') }}">
        <i class="nav-icon icon-user"></i>
        <span>Users</span>
    </a>
</li>
