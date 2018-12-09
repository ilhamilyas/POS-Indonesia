
<li class="{{ Request::is('barangs*') ? 'active' : '' }}">
    <a href="{!! route('barangs.index') !!}" style="color: #fadead"><i class="fa fa-edit"></i><span>Barangs</span></a>
</li>

<li class="{{ Request::is('pengirimen*') ? 'active' : '' }}">
    <a href="{!! route('pengirimen.index') !!}" style="color: #fadead"><i class="fa fa-edit"></i><span>Pengirimen</span></a>
</li>

<li class="{{ Request::is('jenisbarangs*') ? 'active' : '' }}">
    <a href="{!! route('jenisbarangs.index') !!}" style="color: #fadead"><i class="fa fa-edit"></i><span>Jenisbarangs</span></a>
</li>

<li class="{{ Request::is('kantorcabangs*') ? 'active' : '' }}">
    <a href="{!! route('kantorcabangs.index') !!}" style="color: #fadead"><i class="fa fa-edit"></i><span>Kantorcabangs</span></a>
</li>

<li class="{{ Request::is('pakets*') ? 'active' : '' }}">
    <a href="{!! route('pakets.index') !!}" style="color: #fadead"><i class="fa fa-edit"></i><span>Pakets</span></a>
</li>

<li class="{{ Request::is('pelanggans*') ? 'active' : '' }}">
    <a href="{!! route('pelanggans.index') !!}" style="color: #fadead"><i class="fa fa-edit"></i><span>Pelanggans</span></a>
</li>

