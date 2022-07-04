<?php

it('has http/livewire/admin/productform/publish page', function () {
    $response = $this->get('/http/livewire/admin/productform/publish');

    $response->assertStatus(200);
});
