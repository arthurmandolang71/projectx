 <div class="header">
     <div class="header-content">
         <nav class="navbar navbar-expand">
             <div class="collapse navbar-collapse justify-content-between">
                 <div class="header-left">
                     <div class="dashboard_bar">
                         {{ $title }}
                     </div>
                 </div>
                 <ul class="navbar-nav header-right">
                     @if (auth()->user()->level == 1)
                         <li class="nav-item">
                             <button class="btn btn-primary d-sm-inline-block d-none "><i
                                     class="bi bi-person-check-fill"></i>
                                 Admin </button>
                         </li>
                     @endif
                     @if (auth()->user()->level == 2)
                         <li class="nav-item">
                             <button class="btn btn-primary d-sm-inline-block d-none "><i
                                     class="bi bi-person-check-fill"></i>
                                 Caleg</button>
                         </li>
                     @endif
                     @if (auth()->user()->level == 3)
                         <li class="nav-item">
                             <button class="btn btn-primary d-sm-inline-block d-none "><i
                                     class="bi bi-person-check-fill"></i>
                                Tim Caleg</button>
                         </li>
                     @endif
                 </ul>
             </div>
         </nav>
     </div>
 </div>
