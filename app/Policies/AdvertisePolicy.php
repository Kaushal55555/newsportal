<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Advertise;
use App\Models\User;

class AdvertisePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Advertise');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Advertise $advertise): bool
    {
        return $user->checkPermissionTo('view Advertise');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Advertise');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Advertise $advertise): bool
    {
        return $user->checkPermissionTo('update Advertise');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Advertise $advertise): bool
    {
        return $user->checkPermissionTo('delete Advertise');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Advertise');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Advertise $advertise): bool
    {
        return $user->checkPermissionTo('restore Advertise');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Advertise');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Advertise $advertise): bool
    {
        return $user->checkPermissionTo('replicate Advertise');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Advertise');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Advertise $advertise): bool
    {
        return $user->checkPermissionTo('force-delete Advertise');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Advertise');
    }
}
