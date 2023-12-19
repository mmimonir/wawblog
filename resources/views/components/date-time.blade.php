<p><small>{{ $created->toDayDateTimeString() }} <span class="text-info">({{ $created->diffForHumans() }})</span>
    </small></p>
<p class="text-success"><small>{{ $created != $updated ? $updated->toDayDateTimeString() . ' (' .
        $updated->diffForHumans() . ')' :
        'Not Updated Yet'
        }}</small></p>