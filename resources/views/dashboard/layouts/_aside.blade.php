<aside class="main-sidebar" style="background:#462446">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{auth()->user()->image_path}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth()->user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> @lang('site.statue')</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">

            <li class="{{request()->is(LaravelLocalization::getCurrentLocale().'/dashboard/home')? 'active':''}}"><a href="{{ route('dashboard.home') }}"><i
                class="fa fa-dashboard"></i><span>@lang('site.dashboard')</span></a></li>


                @if (auth()->user()->hasPermission('read-users'))
                <li class="{{request()->is(LaravelLocalization::getCurrentLocale().'/dashboard/users*')? 'active':''}}"><a href="{{ route('dashboard.users.index') }}"><i
                            class="fa fa-users"></i><span>@lang('site.users')</span></a></li>
                @endif

                @if (auth()->user()->hasPermission('read-roles'))
                    <li class="{{request()->is(LaravelLocalization::getCurrentLocale().'/dashboard/roles*')? 'active':''}}"><a href="{{ route('dashboard.roles.index') }}"><i
                            class="fa fa-hourglass-half"></i><span>@lang('site.roles')</span></a></li>
                @endif


                @if (auth()->user()->hasPermission('read-countries'))
                <li class="{{request()->is(LaravelLocalization::getCurrentLocale().'/dashboard/countries*')? 'active':''}}"><a href="{{ route('dashboard.countries.index') }}"><i
                        class="fa fa-hourglass-half"></i><span>@lang('country.Countries')</span></a></li>
                @endif


                @if (auth()->user()->hasPermission('read-categories'))
                <li class="{{request()->is(LaravelLocalization::getCurrentLocale().'/dashboard/categories*')? 'active':''}}"><a href="{{ route('dashboard.categories.index') }}"><i
                        class="fa fa-hourglass-half"></i><span>@lang('category.cats')</span></a></li>
                @endif



                @if (auth()->user()->hasPermission('read-employees'))
                <li class="{{request()->is(LaravelLocalization::getCurrentLocale().'/dashboard/employees*')? 'active':''}}"><a href="{{ route('dashboard.employees.index') }}"><i
                class="fa fa-hourglass-half"></i><span>@lang('site.employees')</span></a></li>
                @endif

   
                @if (auth()->user()->hasPermission('read-brands'))
                <li class="{{request()->is(LaravelLocalization::getCurrentLocale().'/dashboard/brands*')? 'active':''}}"><a href="{{ route('dashboard.brands.index') }}"><i
                        class="fa fa-hourglass-half"></i><span>@lang('site.brands')</span></a></li>
                @endif

                
                @if (auth()->user()->hasPermission('read-clients'))
                <li class="{{request()->is(LaravelLocalization::getCurrentLocale().'/dashboard/clients*')? 'active':''}}"><a href="{{ route('dashboard.clients.index') }}"><i
                class="fa fa-hourglass-half"></i><span>@lang('site.clients')</span></a></li>
                @endif



                {{-- @if (auth()->user()->hasPermission('read-users'))
                <li class="treeview {{request()->is(LaravelLocalization::getCurrentLocale().'/dashboard/users*')? 'active':''}}" style="height: auto;">
                    <a href="{{ route('dashboard.users.index') }}" ><i
                        class="fa fa-car"></i><span>@lang('site.users')</span></a>
                        <ul class="treeview-menu" style="display: none;">
                            @if (auth()->user()->hasPermission('read-users'))
                            <li class="{{request()->is(LaravelLocalization::getCurrentLocale().'/dashboard/users*')? 'active':''}}"><a href="{{ route('dashboard.users.index') }}"><i
                                        class="fa fa-users"></i><span>@lang('site.users')</span></a></li>
                            @endif

                            @if (auth()->user()->can('read-roles'))
                                <li class="{{request()->is(LaravelLocalization::getCurrentLocale().'/dashboard/roles*')? 'active':''}}"><a href="{{ route('dashboard.roles.index') }}"><i
                                        class="fa fa-hourglass-half"></i><span>@lang('site.roles')</span></a></li>
                            @endif

                        </ul>
                  </li>
                @endif --}}





                {{--main data --}}
                  {{-- ['read-vehicles','read-countries','read-stages','read-terms','read-classrooms'] --}}
                  {{-- @if (auth()->user()->hasPermission('read-countries'))
                  <li class="treeview {{request()->is(LaravelLocalization::getCurrentLocale().'/dashboard/countries*')? 'active':''}}" style="height: auto;">
                      <a href="{{ route('dashboard.countries.index') }}" ><i
                          class="fa fa-car"></i><span>@lang('site.main data')</span></a>
                          <ul class="treeview-menu" style="display: none;">
                              <li class="{{request()->is(LaravelLocalization::getCurrentLocale().'/dashboard/countries*')? 'active':''}}"><a href="{{ route('dashboard.countries.index') }}"><i
                                  class="fa fa-globe"></i><span>@lang('site.countries')</span></a></li>

                                <li class="{{request()->is(LaravelLocalization::getCurrentLocale().'/dashboard/stages*')? 'active':''}}">
                                <a href="{{ route('dashboard.stages.index') }}"><i
                                class="fa fa-bell"></i><span>@lang('site.stages')</span></a></li>

                              <li class="{{request()->is(LaravelLocalization::getCurrentLocale().'/dashboard/terms*')? 'active':''}}">
                              <a href="{{ route('dashboard.terms.index') }}"><i
                              class="fa fa-leanpub"></i><span>@lang('site.terms')</span></a></li>


                              <li class="{{request()->is(LaravelLocalization::getCurrentLocale().'/dashboard/classrooms*')? 'active':''}}">
                              <a href="{{ route('dashboard.classrooms.index') }}"><i
                              class="fa fa-graduation-cap"></i><span>@lang('site.classrooms')</span></a></li>


                          </ul>
                    </li>
                  @endif --}}


        </ul>

    </section>

</aside>
