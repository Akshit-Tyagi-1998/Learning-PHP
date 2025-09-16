<?php
if (10 > 2) {
  print("condition true");
}
print("<br/>---------------------------------<br/>");
if (10 > 2):
  echo ("condition true");
endif;
print("<br/>---------------------------------<br/>");

if (10 > 2) {
  echo ("condition true");
} else {
  echo ("condition false");
}

print("<br/>---------------------------------<br/>");

if (10 > 2):
  echo ("condition true");
else:
  echo ("condition false");
endif;

print("<br/>---------------------------------<br/>");

if (10 < 2) {
  echo ("first true");
  if (20 > 10) {
    echo ("second true");
  } else {
    echo ("second false");
  }

  if (40 > 30) {
    echo ("third true");
  } else {
    if (40 > 39) {
      echo ("third true");
    } else {
      echo ("third false");
    }
  }
} else {
  echo ("first false");
}

print("<br/>---------------------------------<br/>");

if (10 > 2):
  echo ("first true");
  if (20 > 10):
    echo ("second true");
  else:
    echo ("second fails");
  endif;

  if (40 < 30):
    echo ("third true");
  else:
    if (40 < 39):
      echo ("third true");
    else:
      echo ("third false");
    endif;
  endif;
else:
  echo ("firdt false");
endif;
