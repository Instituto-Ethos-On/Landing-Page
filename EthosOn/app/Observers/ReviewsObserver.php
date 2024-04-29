<?php

namespace App\Observers;

use App\Models\Review_model;
use Illuminate\Support\Facades\Cache;

class ReviewsObserver
{
    private function ClearCache() {
        for ($i=0;$i<=50;$i++) {
            $key = 'review=' . $i;
            if (Cache::has($key)) {
                Cache::forget($key);
            } else {
                break;
            }
        }
    }

    /**
     * Handle the Review_model "Created" event
     * 
     * @param \App\Models\Review_model $review
     * @return void
     */
    public function created(Review_model $review) {
        $this->ClearCache();
    }

    /**
     * Handle the Review_model "Updated" event
     * 
     * @param \App\Models\Review_model $review
     * @return void
     * 
     */
    public function updated(Review_model $review) {
        $this->ClearCache();
    }

    /**
     * Handle the Review_model "Deleted" event
     * 
     * @param \App\Models\Review_model $review
     * @return void
     * 
     */
    public function deleted(Review_model $review) {
        $this->ClearCache();
    }
}
