<?php
/**
 * Created by JS'Cordeiro Programas.
 * User: Sergio
 * Date: 09/01/2021
 * Time: 12:30
 */ ?>

<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
        <!-- sidebar-brand  -->
        <div class="sidebar-item sidebar-brand">
            <a href="{{ route('home') }}">{{ config('app.name', 'Controle de Estoque 1.0') }}</a>
        </div>
        <!-- sidebar-header  -->
        <div class="sidebar-item sidebar-header d-flex flex-nowrap">
            <div class="user-pic">
                <img class="img-responsive img-rounded" src="img/user.jpg" alt="User picture">
            </div>
            <div class="user-info">
                        <span class="user-name">
                            {{ Auth::user()->name }}
                        </span>
                <span class="user-role">
                @if(!empty(Auth::user()->getRoleNames()))
                        @foreach(Auth::user()->getRoleNames() as $v)
                            {{ $v }}
                        @endforeach
                    @endif
                </span>
                <span class="user-status">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        <i class="fa fa-door-open"></i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </span>
            </div>
        </div>
        <!-- sidebar-search  -->
        <div class="sidebar-item sidebar-search">
            <div>
                <div class="input-group">
                    <input type="text" class="form-control search-menu" placeholder="Search...">
                    <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar-menu  -->
        <div class=" sidebar-item sidebar-menu">
            <ul>
                <li class="header-menu">
                    <span>General</span>
                </li>
                <li class="active">
                    <a href="{{ route('users.index') }}">
                        <i class="fa fa-user"></i>
                        <span class="menu-text">Usuários</span>
                        <span class="badge badge-pill badge-primary">{{ count($users) }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('roles.index') }}">
                        <i class="fa fa-book"></i>
                        <span class="menu-text">Regras</span>
                        <span class="badge badge-pill badge-primary">10</span>
                    </a>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa fa-tachometer-alt"></i>
                        <span class="menu-text">Dashboard</span>
                        <span class="badge badge-pill badge-warning">New</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li>
                                <a href="#">Dashboard 1
                                    <span class="badge badge-pill badge-success">Pro</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Dashboard 2</a>
                            </li>
                            <li>
                                <a href="#">Dashboard 3</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- sidebar-menu  -->
    </div>
</nav>