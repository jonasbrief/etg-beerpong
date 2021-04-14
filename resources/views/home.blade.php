@extends('layouts.app')

@section('content')
<hero v-if="this.$router.currentRoute.fullPath === '/'"></hero>
<router-view></router-view>
@endsection
