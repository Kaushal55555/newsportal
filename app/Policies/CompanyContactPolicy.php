<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\CompanyContact;
use App\Models\User;

class CompanyContactPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any CompanyContact');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CompanyContact $companycontact): bool
    {
        return $user->checkPermissionTo('view CompanyContact');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create CompanyContact');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CompanyContact $companycontact): bool
    {
        return $user->checkPermissionTo('update CompanyContact');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CompanyContact $companycontact): bool
    {
        return $user->checkPermissionTo('delete CompanyContact');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any CompanyContact');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CompanyContact $companycontact): bool
    {
        return $user->checkPermissionTo('restore CompanyContact');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any CompanyContact');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, CompanyContact $companycontact): bool
    {
        return $user->checkPermissionTo('replicate CompanyContact');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder CompanyContact');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CompanyContact $companycontact): bool
    {
        return $user->checkPermissionTo('force-delete CompanyContact');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any CompanyContact');
    }
}
