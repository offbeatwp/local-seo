<?php

namespace OffbeatWP\LocalSeo\Helpers;

class ReturnReviews
{

    public static function getAllReviews()
    {
        $reviews = [];

        $reviews['@context'] = "http://schema.org";
        $reviews['@type'] = setting('localseo_company_type');
        $reviews['aggregateRating'] = [];
        $reviewCount = 0;
        $reviewValue = 0;
        
        foreach (setting('static_review_selector') as $review) {
            $reviewCount++;
            $reviews['review'][] = [
                '@type'        => 'Review',
                'author'       => $review['static_review_selector_author'],
                'description'  => $review['static_review_selector_review_body'],
                'name'         => $review['name'],
                'reviewRating' => [
                    '@type'       => 'Rating',
                    "bestRating"  => setting('local_seo_review_best_rating'),
                    "worstRating" => setting('local_seo_review_worst_rating'),
                    'ratingValue' => $review['local_seo_rating'],
                ],
            ];
            $reviewValue += $review['local_seo_rating'];
        }

        $reviewValue = $reviewValue / $reviewCount;

        $reviews['aggregateRating'] = [
            '@type'       => 'AggregateRating',
            'ratingValue' => $reviewValue,
            'reviewCount' => $reviewCount,
            "bestRating"  => setting('local_seo_review_best_rating'),
            "worstRating" => setting('local_seo_review_worst_rating'),
        ];

        return $reviews;
    }


}