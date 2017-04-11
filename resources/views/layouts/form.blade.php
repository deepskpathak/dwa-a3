<div class="row">
    <form class="form-horizontal" method="GET" action="/submit">
        <fieldset>

            <div class="form-group">
                <label for="numberToSplit" class="col-xs-4 control-label pull-left">How many ways to split?
                    &nbsp;<span class="required"><sup>*</sup>required</span></label>
                <div class="col-xs-4">
                    <input type="number" min="1" class="form-control" id="numberToSplit" name="numberToSplit"
                          value="{{ old('numberToSplit') }}}">
                </div>
            </div>
            @if($errors->get('numberToSplit'))
                <ul>
                    @foreach($errors->get('numberToSplit') as $error)
                        <li><span class="text-danger">{{ $error }}</span></li>
                    @endforeach
                </ul>
            @endif
            <div class="form-group">
                <label for="amountToSplit" class="col-xs-4 control-label">How much was the tab? &nbsp;<span
                            class="required"><sup>*</sup>required</span></label>
                <div class="col-xs-4">
                    <input type="text" class="form-control" id="amountToSplit" name="amountToSplit">
                </div>
            </div>
            @if($errors->get('amountToSplit'))
                <ul>
                    @foreach($errors->get('amountToSplit') as $error)
                        <li><span class="text-danger">{{ $error }}</span></li>
                    @endforeach
                </ul>
            @endif
            <div class="form-group">
                <label for="select" class="col-xs-4 control-label">How was the service?</label>
                <div class="col-xs-4">
                    <select class="form-control" id="select" name="select">
                        <option>Good</option>
                        <option>Average</option>
                        <option>Bad</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="roundUp" class="col-xs-4 control-label">Round Up? </label>
                <div class="col-xs-4">
                    <input type="checkbox" class="" id="roundUp" value="checked" name="roundUp">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-4">
                    <a href="/" class="btn btn-default">Reset</a>
                    <button type="submit" class="btn btn-success">Calculate</button>
                </div>
            </div>
        </fieldset>
    </form>
    @if($value != null)
    <div class="">
        <p class="text-success well">
           <strong>Each member owes ${{ $value }}</strong>
        </p>
    </div>
        @endif
</div>