<?php

namespace DsOpenSearchBundle;

final class DsOpenSearchEvents
{
    /**
     * The BULK event occurs before during the processing of bulk method
     */
    public const BULK = 'ds_opensearch.bulk';

    /**
     * The PRE_COMMIT event occurs before committing queries to ES
     */
    public const PRE_COMMIT = 'ds_opensearch.pre_commit';

    /**
     * The POST_COMMIT event occurs after committing queries to ES
     */
    public const POST_COMMIT = 'ds_opensearch.post_commit';

    /**
     * The POST_CLIENT_CREATE event occurs after client is formed. It is still not build,
     * so you can modify or add another information to it. After this event the build() method is called.
     */
    public const POST_CLIENT_CREATE = 'ds_opensearch.post_client_create';
}
