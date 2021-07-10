<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main Menu</li>
                <li>
                    <a href="/" class="waves-effect">
                        <i class="mdi mdi-home"></i><span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('wallet.index') }}" class="waves-effect">
                        <i class="mdi mdi-wallet"></i><span> Wallet </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('category.index') }}" class="waves-effect">
                        <i class="mdi mdi-library-books"></i><span> Category </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('transaction.create') }}" class="waves-effect">
                        <i class="mdi mdi-square-inc-cash"></i><span> Transaction </span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-note-multiple"></i><span> History Transaction <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{ route('transaction.index') }}">All Transaction</a></li>
                        <li><a href="{{ route('transaction.income') }}">Income</a></li>
                        <li><a href="{{ route('transaction.expense') }}">Expense</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
