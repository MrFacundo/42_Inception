FROM alpine:3.19.1

ARG PHPVERSION

RUN apk update && apk upgrade && apk add \
  php${PHPVERSION} \
  php${PHPVERSION}-session \
  php${PHPVERSION}-mysqli

ADD https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php /adminer.php

COPY ./services/bonus/adminer/router.php /router.php

EXPOSE 8080

RUN addgroup -g 1000 nonroot && \
    adduser -u 1000 -G nonroot -s /bin/sh -D nonroot

RUN chown nonroot:nonroot /adminer.php /router.php

USER nonroot

CMD ["php82", "-S", "0.0.0.0:8080", "-t", "/", "router.php"]
