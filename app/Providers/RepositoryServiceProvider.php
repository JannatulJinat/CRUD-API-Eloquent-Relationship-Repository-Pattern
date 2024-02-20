<?php

namespace App\Providers;

use App\Models\Affiliation;
use App\Models\Collection;
use App\Models\Like;
use App\Models\Likeable;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Series;
use App\Models\Tag;
use App\Models\User;
use App\Models\Video;
use App\Repositories\Eloquent\EloquentAffiliation;
use App\Repositories\Eloquent\EloquentCollection;
use App\Repositories\Eloquent\EloquentLike;
use App\Repositories\Eloquent\EloquentLikeable;
use App\Repositories\Eloquent\EloquentPost;
use App\Repositories\Eloquent\EloquentProfile;
use App\Repositories\Eloquent\EloquentSeries;
use App\Repositories\Eloquent\EloquentTag;
use App\Repositories\Eloquent\EloquentUser;
use App\Repositories\Eloquent\EloquentVideo;
use App\Repositories\Interface\AffiliationInterface;
use App\Repositories\Interface\CollectionInterface;
use App\Repositories\Interface\LikeableInterface;
use App\Repositories\Interface\LikeInterface;
use App\Repositories\Interface\PostInterface;
use App\Repositories\Interface\ProfileInterface;
use App\Repositories\Interface\SeriesInterface;
use App\Repositories\Interface\TagInterface;
use App\Repositories\Interface\UserInterface;
use App\Repositories\Interface\VideoInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserInterface::class, function () {
            return new EloquentUser(new User());
        });
        $this->app->bind(VideoInterface::class, function () {
            return new EloquentVideo(new Video());
        });
        $this->app->bind(TagInterface::class, function () {
            return new EloquentTag(new Tag());
        });
        $this->app->bind(SeriesInterface::class, function () {
            return new EloquentSeries(new Series());
        });
        $this->app->bind(ProfileInterface::class, function () {
            return new EloquentProfile(new Profile());
        });
        $this->app->bind(PostInterface::class, function () {
            return new EloquentPost(new Post());
        });
        $this->app->bind(LikeInterface::class, function () {
            return new EloquentLike(new Like());
        });
        $this->app->bind(CollectionInterface::class, function () {
            return new EloquentCollection(new Collection());
        });
        $this->app->bind(AffiliationInterface::class, function () {
            return new EloquentAffiliation(new Affiliation());
        });
        $this->app->bind(LikeableInterface::class, function () {
            return new EloquentLikeable(new Likeable());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
