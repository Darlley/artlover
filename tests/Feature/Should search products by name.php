<?php

it('has should search products by name page', function () {
    $response = $this->get('/should search products by name');

    $response->assertStatus(200);
});
