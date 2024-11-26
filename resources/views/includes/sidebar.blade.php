<a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
    <i class="fa fa-bars"></i>
</a>
<div id="sidebar-wrapper">
    <nav id="spy">
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    
                            <div id="sidebar-menu" style="margin-top:15px">
                                <ul class="sidebar-nav nav">

                                    

                                    {{-- <li><a href="{{route('dashboard')}}" class="waves-effect @if(Request::segment(1)=="dashboard") active @endif"><i class="fa fa-dashcube" aria-hidden="true"></i><span>Dashboard</span></a></li> --}}

                                    <li><a href="{{route('manage.banner')}}" class="waves-effect @if(Request::segment(1)=="manage-banner") active @endif"><i class="fa fa-camera" aria-hidden="true"></i><span>Slides</span></a></li>

                                    

                                    <li><a href="{{route('manage.blog')}}" class="waves-effect @if(Request::segment(1)=="manage-post") active @endif"><i class="fa fa-blog" aria-hidden="true"></i><span>Blog/Product</span></a></li>

                                   

                                    <li><a href="{{route('manage.testimonial')}}" class="waves-effect @if(Request::segment(1)=="manage-testimonial") active @endif"><i class="fa fa-users" aria-hidden="true"></i><span>Review</span></a></li>

                                    

                                    

                                    

                                   

                                    
                            
                                

                                

                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        

                
                    <div class="clearfix"></div>
                </div>
            </div>
    </nav>
</div>


