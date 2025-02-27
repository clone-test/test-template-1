<?php

declare(strict_types=1);

use App\Http\Controllers\Controller;

arch()->preset()->php();
arch()->preset()->security();

it('checks that everything within App has strict types')
    ->expect('App')
    ->toUseStrictTypes();

it('checks that mailables are only called from notifications')
    ->expect('App\Mail')
    ->toOnlyBeUsedIn('App\Notifications');

it('checks that notifications are only called from repositories')
    ->expect('App\Notifications')
    ->toOnlyBeUsedIn('App\Repositories');

it('checks that models are only called within Factories, Repositories, Providers')
    ->expect('App\Models')
    ->toOnlyBeUsedIn(['Database\Factories', 'App\Repositories', 'App\Providers']);

it('checks that repositories are only called from services')
    ->expect('App\Repositories')
    ->toOnlyBeUsedIn('App\Services');

it('checks that services are only called from listeners')
    ->expect('App\Services')
    ->toOnlyBeUsedIn('App\Listeners');

it('checks that listeners have suffix Listener')
    ->expect('App\Listeners')
    ->toHaveSuffix('Listener');

it('checks that listeners implement ShouldQueue')
    ->expect('App\Listeners')
    ->toImplement('Illuminate\Contracts\Queue\ShouldQueue');

it('checks that events have suffix Event')
    ->expect('App\Events')
    ->toHaveSuffix('Event');

it('checks that events extend nothing')
    ->expect('App\Events')
    ->toExtendNothing();

it('checks that events dont use Queueable')
    ->expect('App\Events')
    ->not()->toUse('Queueable');

it('checks that controllers have suffix Controller')
    ->expect('App\Http\Controllers')
    ->toHaveSuffix('Controller');

it('checks that controllers extends from Controller class')
    ->expect('App\Http\Controllers')
    ->toExtend(Controller::class);
