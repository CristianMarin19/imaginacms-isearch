<div class="row">
    <div class="search">

        <form id="custom-search-input" class="form-inline" method="GET" onsubmit="return redirectForm('term2')">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="{{trans('isearch::common.search')}} " name="search" id ="term2" maxlength="64" required>
                <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
            </div><!-- /input-group -->
        </form>

    </div>
</div>

@include('isearch::forms.search-script')