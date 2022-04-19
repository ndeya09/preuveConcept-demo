<li class="nav-item">
    <a href="{{ route('declarations.index') }}"
       class="nav-link {{ Request::is('declarations*') ? 'active' : '' }}">
        <p>Declarations</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('paiements.index') }}"
       class="nav-link {{ Request::is('paiements*') ? 'active' : '' }}">
        <p>Paiements</p>
    </a>
</li>


