@extends('admin.layout.admin')
@section('title_page', 'Página de Banners da Home')
@section('content')
    @parent

    <style>
        .iconsAction{
            padding: 0 10px 0 10px;
        }
    </style>

    <div class="row">
        <div class="col s12">
            <ul class="collection with-header">
                <li class="collection-header"><h4>Meus imóveis</h4></li>
                <li class="collection-item">
                    <div>
                        Alvin
                        <a href="#" class="secondary-content iconsAction">
                            <i class="material-icons">delete</i>
                        </a>
                        <a href="/admin/edit" class="secondary-content iconsAction">
                            <i class="material-icons">mode_edit</i>
                        </a>
                        <a href="/admin/show" class="secondary-content iconsAction">
                            <i class="material-icons">visibility</i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="fixed-action-btn" style="bottom: 90px; right: 24px;">
        <a href="/admin/store" class="btn-floating btn-large red">
            <i class="large material-icons">add</i>
        </a>
    </div>

@endsection