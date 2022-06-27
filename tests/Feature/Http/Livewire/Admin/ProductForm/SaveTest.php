<?php

it('has http/livewire/admin/productform/save page', function () {
    $response = $this->get('/http/livewire/admin/productform/save');

    $response->assertStatus(200);
});
