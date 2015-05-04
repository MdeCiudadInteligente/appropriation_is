SELECT SQL_CALC_FOUND_ROWS
    wpo_posts.ID,
    wpo_posts.post_title,
    wpo_posts.menu_order,
    IFNULL(meta.meta_value,wpo_posts.menu_order) as custom_order
FROM
    wpo_posts
        INNER JOIN
    wpo_term_relationships ON (wpo_posts.ID = wpo_term_relationships.object_id)
        LEFT JOIN
    (SELECT * FROM wpo_postmeta  WHERE meta_key='orden' ) meta ON (wpo_posts.ID = meta.post_id)
		
WHERE
    1 = 1
        AND (wpo_term_relationships.term_taxonomy_id IN (665 , 669, 334, 668, 664, 662, 663, 666, 667))
        AND wpo_posts.post_type IN ('post' , 'mde_especiales')
        AND (wpo_posts.post_status = 'publish'
        OR wpo_posts.post_author = 1
        AND wpo_posts.post_status = 'private')
GROUP BY wpo_posts.ID
ORDER BY custom_order ASC
